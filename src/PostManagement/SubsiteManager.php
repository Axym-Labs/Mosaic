<?php
class SubsiteManager {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($subsiteId, $userId, $notifier) {
        $notifier->Post("Login successful", "success");

        return true;
    }

    public function CheckAuthorized($subsiteId, $userId) {
        
    }

    public function HandleUpdate($subsiteId) {

    }

    public function HandleDelete($subsiteId) {

    }

}
?>