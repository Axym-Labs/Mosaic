<?php
class FrontDataRetriever {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    public function AssignData($smarty) {
        $smarty->assign('subsiteCount', 1);

        return $smarty;
    }



}
?>