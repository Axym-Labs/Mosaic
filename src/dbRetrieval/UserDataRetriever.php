<?php
class UserDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function AssignData($smarty, $userId, $isOwner) {
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
        return $this->AssignDataShared($smarty, $userId, $isOwner);
    }

    public function AssignDataByUsername($smarty, $userName, $isOwner) {
        $usersWithName = $this->tables->user->Select("Username = '$userName'");
        if (count($usersWithName) == 0) {
            $smarty->assign('NotFoundError', "No user with this username found");
            return $smarty;
        }
        $smarty->assign("user", $usersWithName[0]);
        return $this->AssignDataShared($smarty, $usersWithName[0]["UserId"], $isOwner);
    }
    
    private function AssignDataShared($smarty, $userId, $isOwner) {
        $smarty->assign('isOwner', $isOwner);
        $smarty->assign('subsites', $this->tables->subsite->Select("UserId = '$userId'"));
        $smarty->assign('columnTypeData', $this->tables->user->GetColumnTypeData());

        return $smarty;
    }

}
?>