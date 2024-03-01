<?php
class queryTemplater
{
    private $tableConf;
    private $tableName;
    public $columnNames;
    public $idIdentifier;
    private $queryTemplates = array();

    public function __construct($tableName, $tableConf) {
        $this.$tableConf = $tableConf;
        $this.$tableName = $tableName;

        foreach (["insert", "update", ""] as $fileName) {
            $this->queryTemplates[$fileName] = ReadFile($fileName + ".sql");
        }
        $this.$columnNames = explode("\n", ReadFile("columnNames.txt"));
        $this.$idIdentifier = $this->columnNames[0];
        $this->queryTemplates["select"] = "SELECT * FROM" + "`" + $tableName + "` WHERE `" + "[condition]";
        $this->queryTemplates["delete"] = "DELETE FROM " + "`" + $tableName + "` WHERE `" + $idIdentifier + " = [value-Id]"; 
    }

    public function GetInsert($kvDict) {
        $query = $this->queryTemplates["insert"];
        foreach ($kvDict as $key => $value) {
            $query = $this->ReplaceIdentifier($query, "value", $key, $value);
        }
        return $query;
    }

    public function GetUpdate($id, $column, $value) {
        $query = $this->queryTemplates["update"];
        $query = $this->ReplaceTypelessIdentifier($query, "column", $column);
        $query = $this->ReplaceTypelessIdentifier($query, "value", $value);
        return $query;
    }

    public function GetSelect($condition) {
        $query = $this->queryTemplates["select"];
        $query = $this->ReplaceTypelessIdentifier($query, "condition", $condition);
        return $query;
    }

    public function GetSelectWithLimit($condition, $limit) {
        $query = $this->queryTemplates["select"];
        $query = $this->ReplaceTypelessIdentifier($query, "condition", $condition);
        $query += " LIMIT " + $limit;
        return $query;
    }

    public function GetDelete($id) {
        $query = $this->queryTemplates["delete"];
        $query = $this->ReplaceIdentifier($query, "value", "Id", $id);
        return $query;
    }

    private function ReadFile($relFileName) {
        $fileLocation = $this->tableConf->tableDataDir + "/" + $this->tableName + "/" + $relFileName;
        $file = fopen($fileLocation, "r") or die("Unable to open file at: " + $fileLocation);
        $fileContent = fread($file,filesize($fileLocation));
        return $fileContent;
    }

    private function ReplaceIdentifier($string, $identifierType, $identifier, $value) {
        return str_replace("[" + $identifierType + "-" + $identifier + "]", $value, $string);
    }

    private function ReplaceTypelessIdentifier($string, $identifier, $value) {
        return str_replace("[" + $identifier + "]", $value, $string);
    }
}
?>