<?php
class AccountManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandleUpdate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->user->OverwriteFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your account.", "error");
            return false;
        }
    }

    public function HandleCreate($sessionManager, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->user->InsertFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account.", "error");
            return false;
        }
    }

    private function ValidateData($postData, $notifier) {

        // email unique

        // password long enough

    }

}
?>