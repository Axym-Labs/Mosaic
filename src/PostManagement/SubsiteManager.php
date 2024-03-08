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
        list($valid, $notifier) = $this->ValidateData($userId, $_POST, $notifier, $subsiteId);
        if (!$valid) {
            return array(false, $notifier);
        }

        try {
            $this->tables->subsite->OverwriteFromPostRequest($_POST);
            return array(true, $notifier);
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your site.", "error");
            return array(false, $notifier);
        }
    }

    public function HandleCreate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($userId, $_POST, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        try {
            $this->tables->subsite->InsertFromPostRequest($_POST);
            return array(true, $notifier);
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your user.", "error");
            return array(false, $notifier);
        }
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
        $user = $this->tables->user->SelectById($userId);
        $subsites = $this->tables->subsite->Select("UserId = $userId");
        $plan = $this->tables->plan->SelectById($user["PlanId"])[0];
        $planPermissions = $this->tables->planperm->Select("PlanPermissionid = " . $plan["PlanPermissionId"])[0];

        if (count($subsites) >= $planPermissions["SubsiteLimit"]) {
            $notifier->Post("You have reached the limit of your subsites: Updating/Creating new subsites is not possible", "error");
            return array(false, $notifier);
        }
        // route correct pattern
        if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["Route"])) {
            $notifier->Post("Invalid route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
            return array(false, $notifier);
        }
        // shortroute correct pattern
        if (!preg_match(BusinessConstants::$ROUTE_FORMAT, $postData["ShortRoute"])) {
            $notifier->Post("Invalid short route format: " . BusinessConstants::$ROUTE_FORMAT_EXPLANATION, "error");
            return array(false, $notifier);
        }
        // route unique
        $route = $postData["Route"];
        $subsite = $this->tables->subsite->Select("Route = '$route' AND UserId = $userId");
        if (count($subsite) > 0 && $subsite[0]["SubSiteId"] != $existingSubSiteId) {
            $notifier->Post("This route is already taken", "error");
            return array(false, $notifier);
        }
        // if not empty: shortroute unique
        if ($postData["ShortRoute"] != "") {
            $shortRoute = $postData["ShortRoute"];
            $subsite = $this->tables->subsite->Select("ShortRoute = '$shortRoute'");
            if (count($subsite) > 0 && $subsite[0]["SubSiteId"] != $existingSubSiteId) {
                $notifier->Post("This short route is already taken", "error");
                return array(false, $notifier);
            }
        }

        return array(true, $notifier);
    }
}
?>