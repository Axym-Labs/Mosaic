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

        $subsite = $this->tables->subsite->SelectById($subsiteId)[0];
        $userId = $subsite["UserId"];

        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->tables->fragments->GetTableByName($tableName)->SelectById($fragmentId)[0];
            $extraFragmentContent = $this->GetExtraEditFragmentContent($tableName, $userId, $subsiteId, $fragmentId, $fragmentContent);
            $editFragment = $this->GetTemplatedEditFragment($tableName, $fragmentContent, $extraFragmentContent);
            $subsiteCf = $this->tables->subsitecf->Select("ContentId = $fragmentId AND ContentTableName = \"$tableName\"")[0];
            $editFragmentArray = array("FragmentTableName" => $tableName, "FragmentId" => $fragmentId, "FragmentContent" => $editFragment, "SubsiteCfContent" => $subsiteCf);
            array_push($fragments, $editFragmentArray);
        }
        $smarty->assign('editFragments', $fragments);
        $smarty->assign("allowedToCreateFragment", FragmentManager::UserHasNotReachedFragmentLimit($this->tables, $subsiteId, $userId));
        $smarty->assign("planperm", UserDataRetriever::GetPlanPermissions($this->tables, $userId));

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

    private function GetExtraEditFragmentContent($tableName, $userId, $subsiteId, $fragmentId, $fragmentContent) {
        if ($tableName == "FragmentCredentials") {
            return $this->tables->user->SelectById($fragmentContent["UserId"])[0];
        }
        return array();
    }

}
?>