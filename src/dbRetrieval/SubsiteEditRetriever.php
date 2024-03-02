<?php
class SubsiteEditRetriever {
    private $tables;
    private $subsiteDataRetriever;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
        $this->subsiteDataRetriever = new SubsiteDataRetriever($dbCon);
    }

    public function AssignData($smarty, $subsiteId) {
        $smarty = $this->subsiteDataRetriever->AssignData($smarty, $subsiteId, false);

        if ($smarty->getTemplateVars('Error')) {
            return $smarty;
        }

        $genericFragments = $this->subsiteDataRetriever->GetGenericFragments($subsiteId);

        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->tables->fragments->GetTableByName($tableName)->SelectById($fragmentId);
            array_push($fragments, $this->GetTemplatedEditFragment($tableName, $fragmentContent));
        }
        $smarty->assign('fragments', $fragments);

        return $smarty;
    }
    
    private function GetTemplatedEditFragment($tableName, $fragmentContent) {
        $smarty = new Smarty();
        $smarty->assign('fragmentContent', $fragmentContent);
        return $smarty->fetch("templates/editFragments/$tableName.tpl");
    }

}
?>