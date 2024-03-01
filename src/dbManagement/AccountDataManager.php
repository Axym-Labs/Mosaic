<?php
class AccountDataManager {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($sessionManager) {
        
    }

}
?>