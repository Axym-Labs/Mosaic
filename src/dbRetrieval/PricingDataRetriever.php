<?php
class PricingDataRetriever {
    public $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    public function AssignData($smarty) {


        return $smarty;
    }



}
?>