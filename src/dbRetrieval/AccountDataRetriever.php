<?php
class AccountDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function AssignData($smarty, $userId, $allowedToEdit) {
        $usersWithId = $this->tables->user->SelectById($userId);
        if (count($usersWithId) == 0) {
            $smarty = new Smarty();
            $smarty->assign('NotFoundError', "No user with this id found");
            return $smarty;
        }
        $smarty->assign('user', $usersWithId[0]);
        return array($this->AssignDataShared($smarty, $userId, $allowedToEdit));
    }

    public function AssignDataByUsername($smarty, $userName, $allowedToEdit) {
        $user = $this->tables->user->Select("name = '$userName'");
        $smarty->assign('user', $user);
        return $this->AssignDataShared($smarty, $user["UserId"], $allowedToEdit);
    }
    
    private function AssignDataShared($smarty, $userId, $allowedToEdit) {
        $smarty->assign('allowedToEdit', $allowedToEdit);
        $smarty->assign('subsites', $this->tables->subsite->Select("UserId = '$userId'"));
        return $smarty;
    }

}
?>