<?php
class SubsiteDataRetriever {
    private $tables;
    private $flexibleTable;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
        $this->flexibleTable = new FlexibleTable($dbCon);
    }

    public function AssignData($smarty, $subsiteId, $isShort) {
        $subsite = $this->tables->subsite->SelectById($subsiteId);
        return $this->AssignDataShared($smarty, $subsite, $isShort);
    }

    public function AssignDataBySubsiteName($smarty, $subsiteName, $isShort) {
        $subsite = $this->tables->subsite->Select("name = '$subsiteName'");
        return $this->AssignDataShared($smarty, $subsite, $isShort);
    }

    private function AssignDataShared($smarty, $subsite, $isShort) {
        $smarty->assign('subsite', $subsite);
        $smarty->assign('isShort', $isShort);

        $genericFragments = $this->tables->subsitecf->Select("WebsiteId = " . $subsite["SubsiteId"], 0, "Position");
        
        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->flexibleTable->Execute("SELECT * FROM $tableName WHERE Id = $fragmentId");
            array_push($fragments, $this->GetTemplatedFragment($tableName, $fragmentContent));
        }

        $smarty->assign('fragments', $fragments);
        return $smarty;
    }

    private function GetTemplatedFragment($tableName, $fragmentContent) {
        $smarty = new Smarty();
        $smarty->assign('fragmentContent', $fragmentContent);
        return $smarty->fetch("templates/fragments/$tableName.tpl");
    }
}
?>