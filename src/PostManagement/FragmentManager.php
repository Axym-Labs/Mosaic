<?php
class FragmentManager {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function HandleUpdate($fragmentId, $subsiteId, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($subsiteId, $_POST, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        try {
            $this->tables->subsitecf->OverwriteFromPostRequest($postData);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update the fragment.", "error");
            return array(false, $notifier);
        }
    }

    public function HandleCreate($subsiteId, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($subsiteId, $_POST, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        $this->tables->fragments->GetTableByName($postData["ContentTableName"])->InsertFromPostRequest($postData);
        $contentId = $this->tables->fragments->GetTableByName($postData["ContentTableName"])->GetDbCon()->lastInsertId();

        $postData["ContentId"] = $contentId;

        try {
            $this->tables->subsitecf->InsertFromPostRequest($postData);
            return array(true, $notifier);
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account. Try again later or contact support.", "error");
            return array(true, $notifier);
        }
    }

    private function ValidateAndFillEntity($subsiteId, $postData, $notifier) {
        list($valid, $notifier) = $this->ValidateData($subsiteId, $postData, $notifier);
        if (!$valid) {
            return array($postData, false, $notifier);
        }
        $postData = $this->DefineAutoValues($postData);
        return array($postData, true, $notifier);
    }

    public function HandleDelete($fragmentId, $notifier) {
        $subsitecf = $this->tables->subsitecf->SelectById($fragmentId);
        $this->tables->subsitecf->Delete($fragmentId);

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
        if ($postData["Position"] < 0) {
            $notifier->Post("Position must be positive");
            return array(false, $notifier);
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
        
        $fragments = $this->tables->subsitecf->Select("SubsiteId = $subsiteId");
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

    private function DefineAutoValues($postData) {
        if (!array_key_exists("Position", $postData)) {
            $position = $this->tables->subsitecf->Select("SubsiteId = " . $postData["SubsiteId"], 1, "MAX(Position)")[0]["MAX(Position)"];
            $postData["Position"] = $position + 1;
        }
        
        return $postData;
    }

}
?>