<?php
class fragmentDefinitions {
    private $dbCon;
    private $tableConf;

    public $credentials;
    public $projectinfo;
    public $socials;
    public $images;
    public $link;
    public $news;
    // public $linksection;
    // public $newsSection;
    public $texts;
    public $iframes;

    public function __construct($dbCon) {
        $this->dbCon = $dbCon;
        $this->tableConf = new tableConfiguration("queries", "Fragment");
        $this->credentials = new dbTable("Credentials", $this->tableConf, $this->dbCon);
        $this->projectinfo = new dbTable("ProjectInfo", $this->tableConf, $this->dbCon);
        $this->socials = new dbTable("Socials", $this->tableConf, $this->dbCon);
        $this->images = new dbTable("Image", $this->tableConf, $this->dbCon);
        $this->link = new dbTable("Link", $this->tableConf, $this->dbCon);
        $this->news = new dbTable("News", $this->tableConf, $this->dbCon);
        // $this->linksection = new dbTable("LinkSection", $this->tableConf, $this->dbCon);
        // $this->newsSection = new dbTable("NewsSection", $this->tableConf, $this->dbCon);
        $this->texts = new dbTable("Text", $this->tableConf, $this->dbCon);
        $this->iframes = new dbTable("IFrame", $this->tableConf, $this->dbCon);
    }

    public function GetTableByName($tableName) {
        switch ($tableName->lower()) {
            case "credentials":
                return $this->credentials;
            case "ProjectInfo":
                return $this->projectinfo;
            case "Socials":
                return $this->socials;
            case "Image":
                return $this->images;
            case "link":
                return $this->link;
            case "news":
                return $this->news;
            // case "LinkSection":
            //     return $this->linksection;
            // case "NewsSection":
            //     return $this->newsSection;
            case "text":
                return $this->texts;
            case "iframe":
                return $this->iframes;
        }
    }
}
?>