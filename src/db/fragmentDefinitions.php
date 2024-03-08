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
        $this->tableConf = new tableConfiguration("mosaic", "queries", "fragment");
        $this->credentials = new dbTable("credentials", $this->tableConf, $this->dbCon);
        $this->projectinfo = new dbTable("projectinfo", $this->tableConf, $this->dbCon);
        $this->socials = new dbTable("socials", $this->tableConf, $this->dbCon);
        $this->images = new dbTable("image", $this->tableConf, $this->dbCon);
        $this->link = new dbTable("link", $this->tableConf, $this->dbCon);
        $this->news = new dbTable("news", $this->tableConf, $this->dbCon);
        // $this->linksection = new dbTable("LinkSection", $this->tableConf, $this->dbCon);
        // $this->newsSection = new dbTable("NewsSection", $this->tableConf, $this->dbCon);
        $this->texts = new dbTable("text", $this->tableConf, $this->dbCon);
        $this->iframes = new dbTable("iframe", $this->tableConf, $this->dbCon);
    }

    public function GetTableByName($tableName) {
        $count = 1;
        switch (str_replace("fragment", "", strtolower($tableName), $count)) {
            case "credentials":
                return $this->credentials;
            case "projectinfo":
                return $this->projectinfo;
            case "socials":
                return $this->socials;
            case "image":
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