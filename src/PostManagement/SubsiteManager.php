<?php
class SubsiteManager {
    private $tables;
    private $fragmentManager;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
        $this->fragmentManager = new FragmentManager($dbCon);
    }

    // editView-option
    public function HandleUpdate($subsiteId, $userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($userId, $_POST, $notifier, $subsiteId);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->subsite->OverwriteFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your site.", "error");
            return false;
        }
    }

    public function HandleCreate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($userId, $_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->subsite->InsertFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account.", "error");
            return false;
        }
    }

    public function HandleDelete($subsiteId) {
        $fragments = $this->tables->subsitecf->Select("WebsiteId = $subsiteId");
        
        foreach ($fragments as $fragment) {
            $this->fragmentManager->HandleDelete($fragment["SubsiteContentFragmentId"]);
        }

        $this->tables->subsite->Delete($subsiteId);
    }

    private function ValidateData($userId, $postData, $notifier, $existingSubsiteId = -1) {
        $success = true;
        // subsite limit not exceeded
        $user = $this->tables->user->SelectById($userId);
        $subsites = $this->tables->subsite->Select("UserId = $userId");
        $plan = $this->tables->plan->SelectById($user["PlanId"])[0];
        $planPermissions = $this->tables->planperm->Select("PlanPermissionid = " . $plan["PlanPermissionId"])[0];

        if (count($subsites) >= $planPermissions["SubsiteLimit"]) {
            $notifier->Post("You have reached the limit of your subsites: Updating/Creating new subsites is not possible", "error");
            $success = false;
        }
        // route correct pattern
        if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["Route"])) {
            $notifier->Post("Invalid route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
            $success = false;
        }
        // shortroute correct pattern
        if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["ShortRoute"])) {
            $notifier->Post("Invalid short route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
            $success = false;
        }
        // route unique
        $route = $postData["Route"];
        $subsite = $this->tables->subsite->Select("Route = '$route' AND UserId = $userId");
        if (count($subsite) > 0 && $subsite[0]["SubsiteId"] != $existingSubsiteId) {
            $notifier->Post("This route is already taken", "error");
            $success = false;
        }
        // if not empty: shortroute unique
        if ($postData["ShortRoute"] != "") {
            $shortRoute = $postData["ShortRoute"];
            $subsite = $this->tables->subsite->Select("ShortRoute = '$shortRoute'");
            if (count($subsite) > 0 && $subsite[0]["SubsiteId"] != $existingSubsiteId) {
                $notifier->Post("This short route is already taken", "error");
                $success = false;
            }
        }

        return array($success, $notifier);
    }
}
?>