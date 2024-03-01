<?php
class AccountManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($userId, $notifier) {
        try {
            $this->tables->user->OverwriteFromPostRequest($userId, $_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your account.", "error");
            return false;
        }
    }

    public function HandleCreate() {

    }

    public function HandleDelete() {

    }

    private function ValidateData() {

    }

}
?>