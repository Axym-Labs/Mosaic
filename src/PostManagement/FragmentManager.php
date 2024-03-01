<?php
class SubsiteManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function Update($fragmentId, $userid, $notifier) {

        return true;
    }

    public function HandleCreate() {

    }

    public function HandleDelete($fragmentId) {

    }

    private function ValidateData() {

    }

}
?>