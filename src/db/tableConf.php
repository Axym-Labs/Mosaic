<?php
class tableConfiguration {
    public $database;
    public $tableDataDir;
    public $tableNamePrefix;

    public function __construct($database, $tableDataDir, $tableNamePrefix = "") {
        $this->database = $database;
        $this->tableDataDir = $tableDataDir;
        $this->tableNamePrefix = $tableNamePrefix;
    }

}
?>