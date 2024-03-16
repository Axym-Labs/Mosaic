
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
        $this->tableName = strtolower($tableName);
        $this->tableConf = $tableConf;
        $this->queryTemplater = new queryTemplater($tableName, $tableConf);
        $this->dbCon = $dbCon;
    }

    public function Count() {
        $query = $this->queryTemplater->GetCount();
        return $this->returnFetchedResult($query);
    }

    public function GetColumnTypeData()
    {
        return $this->queryTemplater->GetColumnTypeData();
    }

    public function CheckStringLengthLimits($postData) {
        $postData = $this->queryTemplater->FilterForColumnNames($postData, true);
        return $this->queryTemplater->CheckStringLengthLimits($postData);
    }

    public function CheckFieldsNull($postData, $filterData = false) {
        if ($filterData) {
            $postData = $this->queryTemplater->FilterForColumnNames($postData, true);
        }
        return $this->queryTemplater->CheckFieldsNull($postData);
    }

    public function OverwriteFromPostRequest($id, $postData) {
        $cvSets = $this->PrepareCvSetArray($postData);
        $this->OverwriteWithCvSet($id, $cvSets);
    }
    
    public function InsertFromPostRequest($postData) {
        $cvSets = $this->PrepareCvSetArray($postData);
        $this->InsertWithCvSet($cvSets);
    }
    
    private function PrepareCvSetArray($postData) {
        $postData = $this->queryTemplater->FilterForColumnNames($postData, true);
        $cvSets = $this->queryTemplater->ConvertToCvSetArray($postData);
        return $cvSets;
    }
    
    public function Insert($columnValues) {
        $query = $this->queryTemplater->GetInsert($columnValues, true);
        return $this->returnRawResultWithExecution($query);
    }

    public function InsertWithCvSet($cvSet) {
        $query = $this->queryTemplater->GetInsertWithCvSet($cvSet, true);
        return $this->returnRawResultWithExecution($query);
    }
    
    public function OverwriteWithCvSet($id, $cvSet) {
        $query = $this->queryTemplater->GetOverwriteWithCvSet($id, $cvSet);
        return $this->returnRawResultWithExecution($query);
    }

    public function Update($id, $column, $value, $isString = false) {
        $query = $this->queryTemplater->GetUpdate($id, $column, $value, $isString);
        return $this->returnRawResultWithExecution($query);
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
        return $this->returnRawResultWithExecution($query);
    }

    private function returnRawResultWithExecution($query) {
        return $this->dbCon->Execute($query);
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