<?php
class queryTemplater
{
    private $tableConf;
    private $tableName;
    private $columnData;
    private $columnNames;
    private $columnTypes;
    public $idIdentifier;
    private $queryTemplates = array();

    public function __construct($tableName, $tableConf) {
        $this.$tableConf = $tableConf;
        $this.$tableName = $tableName;

        $this.$columnData = explode("\n", ReadFile("definition.csv"));
        $this.$columnNames = array_map(function($x) { return explode(",", $x)[0]; }, $this->columnData);
        $this->columnTypes = array_combine($this->columnNames, array_map(function($x) { return explode(",", $x)[1]; }, $this->columnData));

        $this.$idIdentifier = $this->columnNames[0];
        $columnNameIdentifiers = array_map(function ($x) { return "`$x`"; }, $this->columnNames).join(", ");
        $valueIdentifiers = array_map(function($x) { return "[value-$x]"; }, $this->$columnNames).join(", ");
        $this->queryTemplates["insertGeneric"] = "INSERT INTO `$tableName` ([columns]) VALUES ([values])";
        $this->queryTemplates["insert"] = "INSERT INTO `$tableName` ($columnNameIdentifiers) VALUES ($valueIdentifiers)";
        $this->queryTemplates["overwrite"] = "UPDATE `$tableName` SET [overwrite] WHERE `$idIdentifier` = [value-Id]";
        $this->queryTemplates["update"] = "UPDATE `$tableName` SET `[column]` = [value] WHERE `$idIdentifier` = [value-Id]";
        $this->queryTemplates["select"] = "SELECT [columns] FROM `$tableName` WHERE `[condition]`";
        $this->queryTemplates["delete"] = "DELETE FROM `$tableName` WHERE `$idIdentifier` = [value-Id]"; 
    }

    public function ConvertToCvSet($kvDict) {
        $cvSet = array();
        foreach ($kvDict as $key => $value) {
            $cvSet[] = new cvSet($key, $value, $this->columnTypes[$key]);
        }
        return $cvSet;
    }

    public function FilterForColumnNames($kvDict, $removeId = false) {
        $filteredDict = array();
        foreach ($kvDict as $key => $value) {
            if (in_array($key, $this->columnNames) && !($removeId && $key == $this->idIdentifier)) {
                $filteredDict[$key] = $value;
            }
        }
        return $filteredDict;
    }

    public function CheckStringLengthLimits($kvDict) {
        $exceedingColumns = array();
        foreach ($kvDict as $key => $value) {
            if ($this->columnTypes[$key] == "varchar" || $this->columnTypes[$key] == "char" || $this->columnTypes[$key] == "binary" || $this->columnTypes[$key] == "varbinary" || $this->columnTypes[$key] == "bit" || $this->columnTypes[$key] == "json" || $this->columnTypes[$key] == "enum" || $this->columnTypes[$key] == "set") {
                $length_limit = strtok(explode("(", $this->columnTypes[$key]), ")");
                if (strlen($value) > $length_limit) {
                    $exceedingColumns[] = $key;
                }
            }
        }
        return array(count($exceedingColumns) == 0, $exceedingColumns);
    }

    public function GetInsert($kvDict, $removeId) {
        if ($removeId) {
            $kvDict = array_filter($kvDict, function($x) { return $x->GetColumnPart() != $this->idIdentifier; });
        }
        $query = $this->queryTemplates["insert"];
        foreach ($kvDict as $key => $value) {
            $query = $this->ReplaceIdentifier($query, "value", $key, $value);
        }
        return $query;
    }

    public function GetOverwrite($id, $updateSetArray) {
        $query = $this->queryTemplates["overwrite"];
        $query = $this->ReplaceIdentifier($query, "value", "Id", $id);
        $query = $this->ReplaceTypelessIdentifier($query, "overwrite", join(", ", array_map(function($x) { return $x->ToUpdateFragment(); }, $updateSetArray)));
        return $query;
    }

    public function GetInsertWithCvSet($updateSetArray, $removeId) {
        if ($removeId) {
            $updateSetArray = array_filter($updateSetArray, function($x) { return $x->GetColumnPart() != $this->idIdentifier; });
        }
        $query = $this->queryTemplates["insertGeneric"];
        $query = $this->ReplaceTypelessIdentifier($query, "columns", join(", ", array_map(function($x) { return $x->GetColumnPart(); }, $updateSetArray)));
        $query = $this->ReplaceTypelessIdentifier($query, "values", join(", ", array_map(function($x) { return $x->GetValuePart(); }, $updateSetArray)));
        return $query;
    }

    public function GetUpdate($id, $column, $value, $isString = false) {
        if (!in_array($column, $this->columnNames)) {
            return "";
        }
        $query = $this->queryTemplates["update"];
        $query = $this->ReplaceTypelessIdentifier($query, "column", $column);
        $query = $this->ReplaceTypelessIdentifier($query, "value", $isString ? "'$value'" : $value);
        $query = $this->ReplaceIdentifier($query, "value", "Id", $id);
        return $query;
    }

    public function GetSelect($condition, $limit = 0, $orderBy = "") {
        $query = $this->queryTemplates["select"];
        $query = $this->ReplaceTypelessIdentifier($query, "condition", $condition);
        if ($orderBy != "") {
            $query += " ORDER BY " + $orderBy;
        }
        if ($limit > 0) {
            $query += " LIMIT " + $limit;
        }
        return $query;
    }

    public function GetSelectById($id, $limit = 0, $orderBy = "") {
        $query = $this->queryTemplates["select"];
        $query = $this->ReplaceTypelessIdentifier($query, "oondition", "`" + $this->idIdentifier + "` = " + $id);
        if ($orderBy != "") {
            $query += " ORDER BY " + $orderBy;
        }
        if ($limit > 0) {
            $query += " LIMIT " + $limit;
        }
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