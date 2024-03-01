<?php
class tableConfiguration {
    public $tableDataDir;
    public $tableNamePrefix;

    public function __construct($tableDataDir, $tableNamePrefix) {
        $this.$tableDataDir = $tableDataDir;
        $this.$tableNamePrefix = $tableNamePrefix;
    }



}
?>