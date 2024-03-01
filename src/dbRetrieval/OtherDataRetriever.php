<?php
class OtherDataRetriever {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new contentPiecesDefinitions($dbCon);
    }

    public function AssignData($smarty) {


        return $smarty;
    }



}
?>