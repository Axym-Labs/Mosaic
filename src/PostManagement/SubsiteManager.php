<?php
class SubsiteManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandleUpdate($subsiteId, $userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData();
        if (!$valid) {
            return false;
        }

        return true;
    }

    public function HandleCreate() {
        list($valid, $notifier) = $this->ValidateData();
        if (!$valid) {
            return false;
        }


        
    }

    public function HandleDelete($subsiteId) {

    }

    private function ValidateData() {

    }
}
?>