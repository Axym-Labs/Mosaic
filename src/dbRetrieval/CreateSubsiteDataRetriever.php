<?php
class CreateSubsiteDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function AssignData($smarty, $userId) {
        $user = $this->tables->user->SelectById($userId)[0];
        $plan = $this->tables->plan->SelectById($user["PlanId"])[0];
        $planperm = $this->tables->planperm->SelectById($plan["PlanPermissionId"])[0];

        $subsiteCount = count($this->tables->subsite->Select("UserId = $userId"));
        if ($subsiteCount > $planperm["SubsiteLimit"]) {
            $smarty->assign("Error", "You reached your subsite limit. Please upgrade your plan to create more subsites.");
        }
        return $smarty;
    }
}
?>