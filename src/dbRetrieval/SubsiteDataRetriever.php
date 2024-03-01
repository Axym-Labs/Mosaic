<?php
class SubsiteDataRetriever {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new contentPiecesDefinitions($dbCon);
    }

    public function AssignData($smarty, $subsiteId, $isShort) {
        

        return $smarty;
    }


}
?>