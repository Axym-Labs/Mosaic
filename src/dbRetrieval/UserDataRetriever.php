<?php
class UserDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function AssignData($smarty, $userId, $isVisitingAccountPage, $visitorId) {
        if (!is_numeric($userId) || (int)$userId < 0) {
            $smarty->assign('NotFoundError', "No user with this id found");
            return $smarty;
        }
        $usersWithId = $this->tables->user->SelectById($userId);
        if (count($usersWithId) == 0) {
            $smarty->assign('NotFoundError', "No user with this id found");
            return $smarty;
        }
        $smarty->assign("user", $usersWithId[0]);
        return $this->AssignDataShared($smarty, $userId, $isVisitingAccountPage, $visitorId);
    }

    public function AssignDataByUsername($smarty, $userName, $isVisitingAccountPage, $visitorId) {
        $usersWithName = $this->tables->user->Select("Username = '$userName'");
        if (count($usersWithName) == 0) {
            $smarty->assign('NotFoundError', "No user with this username found");
            return $smarty;
        }
        $smarty->assign("user", $usersWithName[0]);
        return $this->AssignDataShared($smarty, $usersWithName[0]["UserId"], $isVisitingAccountPage, $visitorId);
    }
    
    private function AssignDataShared($smarty, $userId, $isVisitingAccountPage, $visitorId) {
        $smarty->assign('isVisitingAccountPage', $isVisitingAccountPage);
        $smarty->assign("isThisUser", $userId == $visitorId);
        $smarty->assign('subsites', $this->tables->subsite->Select("UserId = '$userId'"));
        $smarty->assign('columnTypeData', $this->tables->user->GetColumnTypeData());
        $smarty->assign('planperm', UserDataRetriever::GetPlanPermissions($this->tables, $userId));

        return $smarty;
    }

    public static function GetPlanPermissions($tables, $userId) {
        $user = $tables->user->SelectById($userId)[0];
        $plan = $tables->plan->SelectById($user["PlanId"])[0];
        return $tables->planperm->SelectById($plan["PlanPermissionId"])[0];
    }
}
?>