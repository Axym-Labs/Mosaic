<?php
class SubsiteManager {
    private $tables;
    private $fragmentManager;

    public function __construct($tables) {
        $this->tables = $tables;
        $this->fragmentManager = new FragmentManager($tables);
    }

    // editView-option
    public function HandleUpdate($subsiteId, $userId, $notifier) {
        $postData = $_POST;
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($userId, $postData, $notifier, $subsiteId);
        if (!$valid) {
            return array(false, $notifier);
        }

        $this->tables->subsite->OverwriteFromPostRequest($subsiteId, $postData);
        return array(true, $notifier);

        // try {
        // } catch (Exception $e) {
        //     $notifier->Post("Error: Could not update your site.", "error");
        //     return array(false, $notifier);
        // }
    }

    public function HandleCreate($userId, $notifier) {
        $postData = $_POST;
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($userId, $postData, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        $this->tables->subsite->InsertFromPostRequest($postData);
        $subsiteId = $this->tables->subsite->GetDbCon()->GetLastInsertId();
        return array(true, $notifier, $subsiteId);

        // try {
        // } catch (Exception $e) {
        //     $notifier->Post("Error: Could not create your subsite.", "error");
        //     return array(false, $notifier, -1);
        // }
    }

    private function ValidateAndFillEntity($userId, $postData, $notifier, $existingSubSiteId = -1) {
        list($valid, $notifier) = $this->ValidateData($userId, $postData, $notifier, $existingSubSiteId);
        if (!$valid) {
            return array($postData, false, $notifier);
        }
        $postData = $this->DefineAutoValues($userId, $postData);
        return array($postData, true, $notifier);
    }

    private function DefineAutoValues($userId, $postData) {
        if (!array_key_exists("ShortRoute", $postData)) {
            $postData["ShortRoute"] = "";
        }
        $postData["UserId"] = $userId;

        return $postData;
    }

    public function HandleDelete($subsiteId, $notifier) {
        $fragments = $this->tables->subsitecf->Select("WebsiteId = $subsiteId");
        
        foreach ($fragments as $fragment) {
            $this->fragmentManager->HandleDelete($fragment["SubsiteContentFragmentId"], $notifier);
        }

        $this->tables->subsite->Delete($subsiteId);
        return array(true, $notifier);
    }

    private function ValidateData($userId, $postData, $notifier, $existingSubSiteId = -1) {
        // subsite limit not exceeded
        // varchars dont exceed db limits
        list($success, $exceededColumns) = $this->tables->subsite->CheckStringLengthLimits($postData);
        if (!$success) {
            $notifier->Post("The following fields exceed the maximum length: " . implode(", ", $exceededColumns));
            return array(false, $notifier);
        }

        // user has not reached subsite limit
        if (!SubsiteManager::UserHasNotExceededSubsiteLimit($this->tables, $userId) && $existingSubSiteId == -1) {
            $notifier->Post("You have reached the limit of your subsites: Creating new subsites is not possible", "error");
            return array(false, $notifier);
        }
        // route correct pattern
        if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["Route"])) {
            $notifier->Post("Invalid route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
            return array(false, $notifier);
        }
        // shortroute correct pattern
        if (array_key_exists("ShortRoute", $postData)) {
            if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["ShortRoute"])) {
                $notifier->Post("Invalid short route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
                return array(false, $notifier);
            }
        }
        // route unique
        $route = $postData["Route"];
        $subsite = $this->tables->subsite->Select("Route = '$route' AND UserId = $userId");
        if (count($subsite) > 0 && $subsite[0]["SubSiteId"] != $existingSubSiteId) {
            $notifier->Post("This route is already taken", "error");
            return array(false, $notifier);
        }
        // if not empty: shortroute unique
        if (array_key_exists("ShortRoute", $postData)) {
            $shortRoute = $postData["ShortRoute"];
            $subsite = $this->tables->subsite->Select("ShortRoute = '$shortRoute'");
            if (count($subsite) > 0 && $subsite[0]["SubSiteId"] != $existingSubSiteId) {
                $notifier->Post("This short route is already taken", "error");
                return array(false, $notifier);
            }
        }

        return array(true, $notifier);
    }

    public static function UserCanCreateNewSubsite($tables, $userId) {
        return SubsiteManager::UserDifferenceSubsiteLimit($tables, $userId) > 0;
    }

    public static function UserHasNotExceededSubsiteLimit($tables, $userId) {
        return SubsiteManager::UserDifferenceSubsiteLimit($tables, $userId) >= 0;
    }

    public static function UserDifferenceSubsiteLimit($tables, $userId) {
        $subsiteCount = count($tables->subsite->Select("UserId = $userId"));

        $planperm = UserDataRetriever::GetPlanPermissions($tables, $userId);

        $logger = new FileLogger("Logs/log.txt");
        $logger->Log("SubsiteCount: " . $subsiteCount);
        $logger->Log("SubsiteLimit: " . $planperm["SubSiteLimit"]);

        return $planperm["SubSiteLimit"] - $subsiteCount;
    }


}
?>