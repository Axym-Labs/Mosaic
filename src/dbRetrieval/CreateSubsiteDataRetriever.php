<?php
class CreateSubsiteDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function AssignData($smarty, $userId) {
        if (!SubsiteManager::UserCanCreateNewSubsite($this->tables, $userId)) {
            $smarty->assign("Error", "You reached your subsite limit. Please upgrade your plan to create more subsites.");
        }
        $planPerm = UserDataRetriever::GetPlanPermissions($this->tables, $userId);
        $smarty->assign("planperm", $planPerm);
        return $smarty;
    }

}
?>