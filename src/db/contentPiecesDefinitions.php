<?php
class contentPiecesDefinitions {
    private $dbCon;
    private $tableConf;

    public $link;
    public $news;

    public function __construct($dbCon) {
        $this->dbCon = $dbCon;
        $this->tableConf = new tableConfiguration("queries/", "");
        $this->link = new dbTable("SubsiteLink", $this->tableConf, $this->dbCon);
        $this->news = new dbTable("SubsiteNews", $this->tableConf, $this->dbCon);
    }

}
?>