<?php
class SubsiteManager {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function CreateNew($subsiteId, $userId, $notifier) {

        return true;
    }

}
?>