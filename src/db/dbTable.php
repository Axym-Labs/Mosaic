
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
        $this.$tableName = $tableName;
        $this.$tableConf = $tableConf;
        $this.$queryTemplater = new queryTemplater($tableName, $tableConf);
        $this.$dbCon = $dbCon;
    }

    public function insert($columnValues) {
        $query = $this->queryTemplater->GetInsert($columnValues);
        $this->dbCon->Execute($query);
    }

    public function update($columnValues) {
        $query = $this->queryTemplater->GetUpdate($columnValues);
        $this->dbCon->Execute($query);
    }

    public function select($columnValues) {
        $query = $this->queryTemplater->GetSelect($columnValues);
        $this->dbCon->Execute($query);
    }

    public function delete($columnValues) {
        $query = $this->queryTemplater->GetDelete($columnValues);
        $this->dbCon->Execute($query);
    }
}
?>