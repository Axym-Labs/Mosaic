<?php
class PageDataManager {
    private $smarty;
    private $subsiteRet;

    public function __construct($smarty, $dbCon) {
        $this->smarty = $smarty;
        $this->subsiteRet = new SubsiteDataRetriever($dbCon);
    
    }

    public static function FrontPage() {
        
    }
}
?>