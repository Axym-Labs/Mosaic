<?php
class FlexibleTable {
    private $dbCon;

    public function __construct($dbCon) {
        $this->dbCon = $dbCon;
    }

    public function Execute($query) {
        return $this->returnFetchedResult($query);
    }

    public function ExecuteGetResultRaw($query) {
        return $this->dbCon->Execute($query);
    }

    private function returnFetchedResult($query) {
        $result = $this->ExecuteGetResultRaw($query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>