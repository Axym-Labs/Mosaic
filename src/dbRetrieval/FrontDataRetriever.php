<?php
class FrontDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function AssignData($smarty) {
        $subsiteCount = $this->tables->subsite->Count();
        $smarty->assign('subsiteCount', $subsiteCount[0]["COUNT(*)"]);
        $smarty->assign("title", "Hello world!");

        return $smarty;
    }



}
?>