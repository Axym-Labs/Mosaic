<?php
class LoginManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($sessionManager, $notifer) {
        
        return array(true, "Success");
    }

}
?>