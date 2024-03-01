<?php
class AccountManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($userId, $notifer) {
        
        return array(true, "Success");
    }

}
?>