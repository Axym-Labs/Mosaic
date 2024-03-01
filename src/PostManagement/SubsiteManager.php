<?php
class SubsiteManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandleUpdate($subsiteId, $userId, $notifier) {
        $notifier->Post("Login successful", "success");

        return true;
    }

    public function HandleCreate() {

    }

    public function HandleDelete($subsiteId) {

    }

    private function ValidateData() {

    }
}
?>