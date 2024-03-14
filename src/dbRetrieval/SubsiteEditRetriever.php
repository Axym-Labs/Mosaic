<?php
class SubsiteEditDataRetriever {
    private $tables;
    private $subsiteDataRetriever;

    public function __construct($tables) {
        $this->tables = $tables;
        $this->subsiteDataRetriever = new SubsiteDataRetriever($tables);
    }

    public function AssignData($smarty, $subsiteId) {
        $smarty = $this->subsiteDataRetriever->AssignData($smarty, $subsiteId, false);

        if ($smarty->getTemplateVars('NotFoundError')) {
            return $smarty;
        }

        $genericFragments = $this->subsiteDataRetriever->GetGenericFragments($subsiteId);

        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->tables->fragments->GetTableByName($tableName)->SelectById($fragmentId);
            $extraFragmentContent = $this->GetExtraEditFragmentContent($tableName, $fragmentId, $fragmentContent);
            array_push($fragments, $this->GetTemplatedEditFragment($tableName, $fragmentContent, $extraFragmentContent));
        }
        $smarty->assign('editFragments', $fragments);

        return $smarty;
    }
    
    private function GetTemplatedEditFragment($tableName, $fragmentContent, $extraFragmentContent) {
        $count = 1;
        $templateName = strtolower($tableName);
        $templateName = str_replace("fragment", "", $templateName, $count);

        $smarty = new Smarty();
        $smarty->setTemplateDir('src/templates/editFragments/');
        $smarty->assign('fragmentContent', $fragmentContent);
        $smarty->assign('extraFragmentContent', $extraFragmentContent);
        return $smarty->fetch("$templateName.tpl");
    }

    private function GetExtraEditFragmentContent($tableName, $fragmentId, $fragmentContent) {
        if ($tableName == "FragmentCredentials") {
            $userId = $fragmentContent["UserId"];
            return $this->tables->user->SelectById($userId)[0];
        }
        return array();
    }

}
?>