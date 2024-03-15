<?php
class FragmentManager {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function HandleUpdate($subsiteCfId, $subsiteId, $notifier) {
        $postData = $_POST;
        $subsiteCf = $this->tables->subsitecf->SelectById($subsiteCfId)[0];
        $tableName = $subsiteCf["ContentTableName"];

        $logger = new FileLogger("Logs/log.txt");
        $logger->Log("Fragment update attempt: " . json_encode($postData));
        $logger->Log("Fragment table name: " . $tableName);

        $fragmentId = $subsiteCf["ContentId"];
        $postData = $this->reduceFragmentSpecificPostData($tableName, $postData);
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($subsiteId,$postData, $notifier, $subsiteCfId);
        if (!$valid) {
            return array(false, $notifier);
        }

        $postData["ContentTableName"] = $tableName;
        $postData["ContentId"] = $fragmentId;

        $this->tables->fragments->GetTableByName($subsiteCf["ContentTableName"])->OverwriteFromPostRequest($fragmentId, $postData);

        $this->tables->subsitecf->OverwriteFromPostRequest($fragmentId, $postData);
        return array(true, $notifier);
        // try {
        // } catch (Exception $e) {
        //     $notifier->Post("Error: Could not update the fragment.", "error");
        //     return array(false, $notifier);
        // }
    }

    public function HandleCreate($subsiteId, $notifier) {
        $postData = $_POST;
        $tableName = $postData["ContentTableName"];
        $postData = $this->reduceFragmentSpecificPostData($tableName, $postData);
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($subsiteId, $postData, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        $this->tables->fragments->GetTableByName($postData["ContentTableName"])->InsertFromPostRequest($postData);
        $contentId = $this->tables->fragments->GetTableByName($postData["ContentTableName"])->GetDbCon()->lastInsertId();

        $postData["ContentId"] = $contentId;

        $this->tables->subsitecf->InsertFromPostRequest($postData);
        return array(true, $notifier);

        // try {
        // } catch (Exception $e) {
        //     $notifier->Post("Error: Could not create your fragment. Try again later or contact support.", "error");
        //     return array(true, $notifier);
        // }
    }

    private function reduceFragmentSpecificPostData($tableName, $postData) {

        $newPostData = array();
        foreach ($postData as $key => $value) {
            if (!str_starts_with($key, "fragment-") || str_starts_with($key, "fragment-" . $tableName . "-")) {
                $newKey = str_replace("fragment-" . $tableName . "-", "", $key);
                $newPostData[$newKey] = $value;
            }
        }
        return $newPostData;
    }

    private function ValidateAndFillEntity($subsiteId, $postData, $notifier, $subsiteCfId = -1) {
        list($valid, $notifier) = $this->ValidateData($subsiteId, $postData, $notifier);
        if (!$valid) {
            return array($postData, false, $notifier);
        }
        $postData = $this->DefineAutoValues($postData, $subsiteId, $subsiteCfId);
        return array($postData, true, $notifier);
    }

    public function HandleDelete($subsiteCfId, $notifier) {
        $subsitecf = $this->tables->subsitecf->SelectById($subsiteCfId);
        $this->tables->subsitecf->Delete($subsiteCfId);

        // TODO: implement news/linksection delete via table

        $this->tables->fragments->GetTableByName($subsitecf["ContentTableName"])->Delete($subsitecf["ContentId"]);
        return array(true, $notifier);
    }

    private function ValidateData($subsiteId, $postData, $notifier) {
        // varchars dont exceed db limits
        list($success, $exceededColumns) = $this->tables->subsitecf->CheckStringLengthLimits($postData);
        if (!$success) {
            $notifier->Post("The following fields exceed the maximum length: " . implode(", ", $exceededColumns));
            return array(false, $notifier);
        }
        // numbers positive
        if (array_key_exists("Position", $postData)) {
            if ($postData["Position"] < 0) {
                $notifier->Post("Position must be positive");
                return array(false, $notifier);
            }
        }
        $subsitesWithId = $this->tables->subsite->SelectById($subsiteId);
        // subsiteId exists
        if (count($subsitesWithId) == 0) {
            $notifier->Post("Subsite does not exist");
            return array(false, $notifier);
        }

        // maximum fragment count not exceeded
        // leave this out since its not bound to plan permission - can be implemented later
        // $subsite = $subsitesWithId[0];
        // $planId = $this->tables->subsite->SelectById($subsite["userId"])["PlanId"];
        // $plan = $this->tables->plan->SelectById($planId);
        // $planPermissions = $this->tables->plan->SelectById($plan["PlanPermissionId"]);
        
        $fragments = $this->tables->subsitecf->Select("WebsiteId = $subsiteId");
        if (count($fragments) >= BusinessConstants::$MAX_FRAGMENTS_PER_SUBSITE) {
            $notifier->Post("Maximum fragment count exceeded");
            return array(false, $notifier);
        }

        // if includes userid: user exists
        // not a user bound field
        if (array_key_exists("UserId", $postData)) {
            $usersWithId = $this->tables->user->SelectById($postData["UserId"]);
            if (count($usersWithId) == 0) {
                $notifier->Post("No user with this id found");
                return array(false, $notifier);
            }
        }

        return array(true, $notifier);
    }

    private function DefineAutoValues($postData, $subsiteId, $subsiteCfId = -1) {
        $postData["WebsiteId"] = $subsiteId;
        $postData["Spannable"] = 1;
        
        $subsiteCf = $this->tables->subsitecf->SelectById($subsiteCfId)[0];
        
        if (!array_key_exists("Position", $postData)) {
            $cfEntries = $this->tables->subsitecf->Select("WebsiteId = $subsiteId", 1, "Position");
            if (count($cfEntries) == 0) {
                $postData["Position"] = 1;
            } else {
                $postData["Position"] = $cfEntries[0]["Position"] + 1;
            }
        } else {
            $this->EnsurePositionIsUnique($postData["Position"], $subsiteId);
        }

        if (!array_key_exists("BackgroundImage", $postData) && $subsiteCfId != -1) {
            $postData["BackgroundImage"] = $subsiteCf["BackgroundImage"];
        }

        if ($subsiteCf["ContentTableName"] == "FragmentCredentials") {
            $userId = $this->tables->fragments->GetTableByName("FragmentCredentials")->SelectById($subsiteCf["ContentId"])[0]["UserId"];
            $postData["UserId"] = $userId;
            $postData = $this->SetUncheckedCheckboxValue("ShowPersonalData", $postData);
        }

        
        return $postData;
    }

    private function SetUncheckedCheckboxValue($checkboxName, $postData) {
        if (!array_key_exists($checkboxName, $postData)) {
            $postData[$checkboxName] = false;
        }
        return $postData;
    }

    private function EnsurePositionIsUnique($position, $subsiteId) {
        $nextProblemCases = $this->tables->subsitecf->Select("WebsiteId = $subsiteId AND Position = $position");
        while (count($nextProblemCases) > 0) {
            $this->tables->subsitecf->Update($nextProblemCases[0]["SubsiteContentFragmentId"], "Position", $nextProblemCases[0]["Position"] + 1);

            $nextProblemCases = $this->tables->subsitecf->Select("WebsiteId = $subsiteId AND Position = $position");
        }
    }



}
?>