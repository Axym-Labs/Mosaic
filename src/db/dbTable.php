
<?php
class dbTable
{
    // Deklaration einer Eigenschaft
    public $tableName;
    public $tableConf;
    private $queryTemplater;
    private $dbCon;

    public function __construct($tableName, $tableConf, $dbCon)
    {
        $this.$tableName = strtolower($tableName);
        $this.$tableConf = $tableConf;
        $this.$queryTemplater = new queryTemplater($tableName, $tableConf);
        $this.$dbCon = $dbCon;
    }

    public function CheckStringLengthLimits($postData) {
        $postData = $this->queryTemplater->FilterForColumnNames($postData, true);
        return $this->queryTemplater->CheckStringLengthLimits($postData);
    }

    public function OverwriteFromPostRequest($postData) {
        list($id, $cvSet) = $this->PrepareUpdateSetArray($postData);
        $this->Overwrite($id, $cvSet);
    }
    
    public function InsertFromPostRequest($postData) {
        list($id, $cvSet) = $this->PrepareUpdateSetArray($postData);
        $this->InsertWithCvSet($id, $cvSet);
    }
    
    private function PrepareUpdateSetArray($postData) {
        $postData = $this->queryTemplater->FilterForColumnNames($postData, true);
        $cvSet = $this->queryTemplater->ConvertToCvSet($postData);

        return $cvSet;
    }
    
    public function Insert($columnValues) {
        $query = $this->queryTemplater->GetInsert($columnValues, true);
        return $this->returnFetchedResult($query);
    }

    public function InsertWithCvSet($cvSet) {
        $query = $this->queryTemplater->GetInsertWithCvSet($cvSet, true);
        return $this->returnFetchedResult($query);
    }
    
    public function Overwrite($id, $cvSet) {
        $query = $this->queryTemplater->GetOverwrite($id, $cvSet);
        return $this->returnFetchedResult($query);
    }

    public function Update($id, $column, $value, $isString = false) {
        $query = $this->queryTemplater->GetUpdate($id, $column, $value, $isString);
        return $this->returnFetchedResult($query);
    }

    public function SelectById($condition, $limit = 0, $orderBy = "") {
        $query = $this->queryTemplater->GetSelectById($condition, $limit, $orderBy);
        return $this->returnFetchedResult($query);
    }

    public function SelectAll($limit = 0, $orderBy = "") {
        $query = $this->queryTemplater->GetSelect("1", $limit, $orderBy);
        return $this->returnFetchedResult($query);
    }

    public function Select($condition, $limit = 0, $orderBy = "") {
        $query = $this->queryTemplater->GetSelect($condition, $limit, $orderBy);
        return $this->returnFetchedResult($query);
    }

    public function Delete($id) {
        $query = $this->queryTemplater->GetDelete($id);
        return $this->returnFetchedResult($query);
    }

    private function returnFetchedResult($query) {
        $result = $this->dbCon->Execute($query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function GetDbCon() {
        return $this->dbCon;
    }
}
?>