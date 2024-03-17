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
        $contentId = $this->tables->fragments->GetTableByName($postData["ContentTableName"])->GetDbCon()->GetLastInsertId();

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
        $tableName = $this->GetTableName($postData, $subsiteCfId);
        list($valid, $notifier) = $this->ValidateData($subsiteId, $postData, $notifier, $subsiteCfId, $tableName);
        if (!$valid) {
            return array($postData, false, $notifier);
        }
        $postData = $this->DefineAutoValues($postData, $subsiteId, $subsiteCfId, $tableName);
        return array($postData, true, $notifier);
    }

    private function GetTableName($postData, $subsiteCfId) {
        if (array_key_exists("ContentTableName", $postData)) {
            return $postData["ContentTableName"];
        }
        $subsiteCf = $this->tables->subsitecf->SelectById($subsiteCfId)[0];
        return $subsiteCf["ContentTableName"];
    }

    public function HandleDelete($subsiteCfId, $notifier) {
        $subsitecf = $this->tables->subsitecf->SelectById($subsiteCfId)[0];
        $this->tables->fragments->GetTableByName($subsitecf["ContentTableName"])->Delete($subsitecf["ContentId"]);
        $this->tables->subsitecf->Delete($subsiteCfId);

        return array(true, $notifier);
    }

    public static function HandleDeleteUnstableFragment($subsiteCfId, $tables) {
        $subsitecf = $tables->subsitecf->SelectById($subsiteCfId)[0];

        // fragment may no exist - if it does, delete it
        try {
            $tables->fragments->GetTableByName($subsitecf["ContentTableName"])->Delete($subsitecf["ContentId"]);
        } catch (Exception $e) {
        }

        $tables->subsitecf->Delete($subsiteCfId);

        return true;
    }

    private function ValidateData($subsiteId, $postData, $notifier, $subsiteCfId, $tableName) {
        // general data validation
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

        $subsite = $this->tables->subsite->SelectById($subsiteId)[0];
        $userId = $subsite["UserId"];
        
        if (!FragmentManager::UserHasNotReachedFragmentLimit($this->tables, $subsiteId, $userId)) {
            $notifier->Post("Maximum fragment count exceeded");
            return array(false, $notifier);
        }

        if (array_key_exists("BackgroundImage", $postData) && $postData["BackgroundImage"] != "") {
            list($success, $errMsg) = ImageHandler::ValidateImageInput($_FILES["BackgroundImage"]);
            if (!$success) {
                $notifier->Post("Please change your background image input: " . $errMsg, "error");
                return array(false, $notifier);
            }
        }

        $checkPostData = $this->RemoveNullAllowedFields($tableName, $postData);
        list($success, $undefinedColumns) = $this->tables->subsitecf->CheckFieldsNull($checkPostData);
        if (!$success) {
            $notifier->Post("The following fields must have a value: " . implode(", ", $undefinedColumns));
            return array(false, $notifier);
        }

        // fragment specific validation
        // if includes userid: user exists
        if (array_key_exists("UserId", $postData)) {
            $usersWithId = $this->tables->user->SelectById($postData["UserId"]);
            if (count($usersWithId) == 0) {
                $notifier->Post("No user with this id found");
                return array(false, $notifier);
            }
        }

        if ($tableName == "FragmentCredentials") {
            if (array_key_exists("Username", $postData)) {
                $usersWithId = $this->tables->user->Select("Username = \"" . $postData["Username"] . "\"");
                if (count($usersWithId) == 0) {
                    $notifier->Post("No user with this username found");
                    return array(false, $notifier);
                }
            }
        }

        if ($tableName == "FragmentImage") {
            if (array_key_exists("fragment-FragmentImage-ImageContent", $_FILES) && $_FILES["fragment-FragmentImage-ImageContent"]["tmp_name"] != "") {
                list($success, $errMsg) = ImageHandler::ValidateImageInput($_FILES["fragment-FragmentImage-ImageContent"]);
                if (!$success) {
                    $notifier->Post("Please change your image input: " . $errMsg, "error");
                    return array(false, $notifier);
                }
            } else {
                $subsiteCfsWithId = $this->tables->subsitecf->SelectById($subsiteCfId);
                if (count($subsiteCfsWithId) == 0) {
                    $notifier->Post("Please add an image", "error");
                    return array(false, $notifier);
                }
            }
        }

        if ($tableName == "FragmentProjectinfo") {
            if (array_key_exists("LogoBlob", $postData)) {
                list($success, $errMsg) = ImageHandler::ValidateImageInput($_FILES["LogoBlob"]);
                if (!$success) {
                    $notifier->Post("Please change your image input: " . $errMsg, "error");
                    return array(false, $notifier);
                }
            }
        }

        return array(true, $notifier);
    }

    private function DefineAutoValues($postData, $subsiteId, $subsiteCfId, $tableName) {
        // ----- General data -----
        $postData["WebsiteId"] = $subsiteId;
        $postData["Spannable"] = 1;
        
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
        
        $subsiteCfsWithId = $this->tables->subsitecf->SelectById($subsiteCfId);
        if (count($subsiteCfsWithId) > 0) {
            $subsiteCf = $subsiteCfsWithId[0];
            $postData["BackgroundImage"] = $subsiteCf["BackgroundImage"];
        }
        
        if ($tableName == "FragmentCredentials") {
            $usersWithId = $this->tables->user->Select("Username = \"" . $postData["Username"] . "\"");
            $postData["UserId"] = $usersWithId[0]["UserId"];
            $postData = $this->SetUncheckedCheckboxValue("ShowPersonalData", $postData);
        }

        if (!array_key_exists("BackgroundColor", $postData) || $postData["BackgroundColor"] == "") {
            if (!array_key_exists("Opacity", $postData) || $postData["Opacity"] == "") {
                $postData["Opacity"] = "0";
            }
            $postData["BackgroundColor"] = "#000000";
        }

        $postData["BackgroundColor"] = str_replace("#", "", $postData["BackgroundColor"]);

        if (!array_key_exists("Opacity", $postData) || $postData["Opacity"] == "") {
            $postData["Opacity"] = "1";
        }

        if (!array_key_exists("BackgroundImage", $postData) || $postData["BackgroundImage"] == "") {
            if (isset($_FILES["BackgroundImage"]) && isset($_FILES["BackgroundImage"]["tmp_name"]) && $_FILES["BackgroundImage"]["tmp_name"] != "") {
                $logger = new FileLogger("Logs/log.txt");
                $logger->Log(print_r($_FILES["BackgroundImage"], true));
                $postData["BackgroundImage"] = ImageHandler::ConvertImageToJPGBase64($_FILES["BackgroundImage"]);
            } else {
                $postData["BackgroundImage"] = "NULL";
            }
        }

        # ----- Fragment-specific data -----
        if ($tableName == "FragmentLinkProjectinfo") {
            if ($postData["CtaLinkDescription"] == "") {
                $postData["CtaLinkDescription"] = "Get started";
            }
        }

        if ($tableName == "FragmentNews") {
            $postData["Date"] = date('Y-m-d H:i:s');
            if ($postData["LinkDescription"] == "") {
                $postData["LinkDescription"] = "Read more";
            }
        }

        if ($tableName == "FragmentIframe") {
            $postData = $this->SetUncheckedCheckboxValue("MorePermissions", $postData);
            if ($postData["Width"] == "") {
                $postData["Width"] = "400";
            }
            if ($postData["Height"] == "") {
                $postData["Height"] = "400";
            }
        }

        if ($tableName == "FragmentImage") {
            if (isset($_FILES["fragment-FragmentImage-ImageContent"]) && isset($_FILES["fragment-FragmentImage-ImageContent"]["tmp_name"]) && $_FILES["fragment-FragmentImage-ImageContent"]["tmp_name"] != "") {
                $postData["ImageContent"] = ImageHandler::ConvertImageToJPGBase64($_FILES["fragment-FragmentImage-ImageContent"]);
            } else {
                $subsiteCfsWithId = $this->tables->subsitecf->SelectById($subsiteCfId);
                if (count($subsiteCfsWithId) == 0) {
                    $postData["ImageContent"] = "NULL";
                } else {
                    $postData["ImageContent"] = $subsiteCfsWithId[0]["ImageContent"];
                }
            }
        }

        if ($tableName == "FragmentProjectinfo") {
            if (isset($_FILES["fragment-FragmentImage-LogoBlob"]) && isset($_FILES["fragment-FragmentImage-LogoBlob"]["tmp_name"]) && $_FILES["fragment-FragmentImage-LogoBlob"]["tmp_name"] != "") {
                $postData["LogoBlob"] = ImageHandler::ConvertImageToJPGBase64($_FILES["fragment-FragmentImage-LogoBlob"]);
            } else {
                $subsiteCfsWithId = $this->tables->subsitecf->SelectById($subsiteCfId);
                if (count($subsiteCfsWithId) == 0) {
                    $postData["LogoBlob"] = "NULL";
                } else {
                    $postData["LogoBlob"] = $subsiteCfsWithId[0]["LogoBlob"];
                }
            
            }
        }
        
        
        return $postData;
    }

    private function RemoveNullAllowedFields($tableName, $testPostData) {
        unset($testPostData["BackgroundColor"]);
        unset($testPostData["Opacity"]);
        unset($testPostData["BackgroundImage"]);

        if ($tableName == "FragmentCredentials") {
            unset($testPostData["UserId"]);
        } else {
            unset($testPostData["Username"]);
        }
        if ($tableName == "FragmentImage") {
            unset($testPostData["Description"]);
        }
        if ($tableName == "FragmentSocials") {
            foreach (array("Github", "Gitlab", "X", "Facebook", "Reddit", "Discord") as $link) {
                unset($testPostData[$link . "Link"]);
            }
            unset($testPostData["RelativeOrder"]);
        }
        if ($tableName == "FragmentText") {
            unset($testPostData["Text"]);
        }
        if ($tableName == "FragmentLinkProjectinfo") {
            unset($testPostData["CtaLink"]);
        }
        if ($tableName == "FragmentNews") {
            unset($testPostData["Link"]);
        }
        if ($tableName == "FragmentIframe") {
            unset($testPostData["Title"]);
            unset($testPostData["Width"]);
            unset($testPostData["Height"]);
        }
        
        return $testPostData;
    }

    private function SetUncheckedCheckboxValue($checkboxName, $postData) {
        if (!array_key_exists($checkboxName, $postData)) {
            $postData[$checkboxName] = "0";
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

    public static function UserHasNotReachedFragmentLimit($tables, $subsiteId, $userId) {
        $fragmentCount = count($tables->subsitecf->Select("WebsiteId = $subsiteId"));

        $planperm = UserDataRetriever::GetPlanPermissions($tables, $userId);

        return $fragmentCount < $planperm["FragmentLimit"];
    }


}
?>