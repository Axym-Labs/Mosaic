<?php
class FrontDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function AssignData($smarty) {
        $smarty->assign('subsiteCount', 1);
        $smarty->assign("title", "Hello world!");

        return $smarty;
    }



}
?>