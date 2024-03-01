<?php
class fragmentDefinitions {
    private $dbCon;
    private $tableConf;

    public $credentials;
    public $images;
    public $linksection;
    public $newsSection;
    public $texts;
    public $iframes;

    public function __construct($dbCon) {
        $this->dbCon = $dbCon;
        $this->tableConf = new tableConfiguration("queries/Fragments/", "Fragment");
        $this->credentials = new dbTable("credentials", $this->tableConf, $this->dbCon);
        $this->images = new dbTable("fragmentimage", $this->tableConf, $this->dbCon);
        $this->linksection = new dbTable("LinkSection", $this->tableConf, $this->dbCon);
        $this->newsSection = new dbTable("NewsSection", $this->tableConf, $this->dbCon);
        $this->texts = new dbTable("Text", $this->tableConf, $this->dbCon);
        $this->iframes = new dbTable("IFrame", $this->tableConf, $this->dbCon);
    }
}
?>