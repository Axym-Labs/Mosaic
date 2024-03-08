<?php
class UserDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function AssignData($smarty, $userId, $allowedToEdit) {
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
        return array($this->AssignDataShared($smarty, $userId, $allowedToEdit));
    }

    public function AssignDataByUsername($smarty, $userName, $allowedToEdit) {
        $usersWithName = $this->tables->user->Select("Username = '$userName'");
        if (count($usersWithName) == 0) {
            $smarty->assign('NotFoundError', "No user with this username found");
            return $smarty;
        }
        $smarty->assign("user", $usersWithName[0]);
        return $this->AssignDataShared($smarty, $usersWithName[0]["UserId"], $allowedToEdit);
    }
    
    private function AssignDataShared($smarty, $userId, $allowedToEdit) {
        $smarty->assign('allowedToEdit', $allowedToEdit);
        $smarty->assign('subsites', $this->tables->subsite->Select("UserId = '$userId'"));
        $smarty->assign('columnTypeData', $this->tables->user->GetColumnTypeData());
        return $smarty;
    }

}
?>