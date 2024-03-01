<?php
class SubsiteEditRetriever {
    private $dbCon;
    private $tables;
    private $subsiteDataRetriever;
    private $flexibleTable;

    public function __construct($dbCon) {
        $this->dbCon = $dbCon;
        $this->tables = new tableDefinitions($dbCon);
        $this->subsiteDataRetriever = new SubsiteDataRetriever($dbCon);
        $this->flexibleTable = new FlexibleTable($dbCon);
    }

    public function AssignData($smarty, $subsiteId) {
        $subsiteData = $this->subsiteDataRetriever->AssignData($smarty, $subsiteId, false);

        $genericFragments = $this->subsiteDataRetriever->GetGenericFragments($subsiteId);

        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->flexibleTable->Execute("SELECT * FROM $tableName WHERE Id = $fragmentId");
            array_push($fragments, $this->GetTemplatedEditFragment($tableName, $fragmentContent));
        }


        return $subsiteData;
    }
    
    private function GetTemplatedEditFragment($tableName, $fragmentContent) {
        $smarty = new Smarty();
        $smarty->assign('fragmentContent', $fragmentContent);
        return $smarty->fetch("templates/fragments/$tableName.tpl");
    }

}
?>