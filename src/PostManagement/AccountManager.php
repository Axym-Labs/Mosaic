<?php
class AccountManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandleUpdate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData();
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->user->OverwriteFromPostRequest($userId, $_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your account.", "error");
            return false;
        }
    }

    public function HandleCreate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData();
        if (!$valid) {
            return false;
        }


    }

    public function HandleDelete() {

    }

    private function ValidateData() {

    }

}
?>