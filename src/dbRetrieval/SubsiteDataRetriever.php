<?php
class SubsiteDataRetriever {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    public function AssignData($smarty, $subsiteId, $isShort) {
        $subsite = $this->tables->subsite->SelectById($subsiteId);
        return $this->AssignDataShared($smarty, $subsite, $isShort);
    }

    public function AssignDataByRoute($smarty, $userName, $subsiteRoute, $isShort) {
        $usersWithId = $this->tables->user->Select("UserName = '$userName'");
        if (count($usersWithId) == 0) {
            $smarty = new Smarty();
            $smarty->assign('NotFoundError', "No user with this username found");
            return $smarty;
        }
        $userId = $usersWithId[0]["UserId"];

        $subsitesWithId = $this->tables->subsite->Select("UserId = '$userId' AND Route = '$subsiteRoute'");
        if (count($subsitesWithId) == 0) {
            $smarty = new Smarty();
            $smarty->assign('NotFoundError', "No subsite with this short route found");
            return $smarty;
        }
        return $this->AssignDataShared($smarty, $subsitesWithId[0], $isShort);
    }

    public function AssignDataByShortRoute($smarty, $subsiteShortRoute, $isShort) {
        $subsitesWithId = $this->tables->subsite->Select("ShortRoute = '$subsiteShortRoute'");
        if (count($subsitesWithId) == 0) {
            $smarty = new Smarty();
            $smarty->assign('NotFoundError', "No subsite with this short route found");
            return $smarty;
        }
        return $this->AssignDataShared($smarty, $subsitesWithId[0], $isShort);
    }

    private function AssignDataShared($smarty, $subsite, $isShort) {
        $smarty->assign('subsite', $subsite);
        $smarty->assign('isShort', $isShort);

        $genericFragments = $this->GetGenericFragments($subsite["SubsiteId"]);

        $fragments = array();
        foreach ($genericFragments as $fragment) {
            $tableName = $fragment["ContentTableName"];
            $fragmentId = $fragment["ContentId"];
            $fragmentContent = $this->tables->fragments->GetTableByName($tableName)->SelectById($fragmentId);
            $extraFragmentContent = $this->GetExtraFragmentContent($tableName, $fragmentId, $fragmentContent);
            array_push($fragments, $this->GetTemplatedFragment($tableName, $fragmentContent, $extraFragmentContent));
        }

        $smarty->assign('fragments', $fragments);
        return $smarty;
    }

    public function GetGenericFragments($subsiteId) {
        return $this->tables->subsitecf->Select("WebsiteId = $subsiteId", 0, "Position");
    }

    private function GetTemplatedFragment($tableName, $fragmentContent, $extraFragmentContent) {
        $smarty = new Smarty();
        $smarty->assign('fragmentContent', $fragmentContent);
        $smarty->assign('extraFragmentContent', $extraFragmentContent);
        return $smarty->fetch("templates/fragments/$tableName.tpl");
    }

    private function GetExtraFragmentContent($tableName, $fragmentId, $fragmentContent) {
        if ($tableName == "FragmentCredentials") {
            $userId = $fragmentContent["UserId"];
            return $this->tables->user->SelectById($userId)[0];
        }
        return null;
    }
}
?>