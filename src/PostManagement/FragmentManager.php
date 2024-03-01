<?php
class SubsiteManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function Update($fragmentId, $notifier) {

        return true;
    }

}
?>