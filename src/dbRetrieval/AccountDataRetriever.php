<?php
class AccountDataRetriever {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function AssignData($smarty, $userId) {


        return $smarty;
    }


}
?>