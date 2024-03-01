
<?php
class dbTable
{
    private $dbCon;
    private $tableConf;

    public $user;
    public $subsitecf;
    public $subsite;
    public $planperm;

    public $fragments;
    public $contentPieces;

    public function __construct($dbCon)
    {        $this->tableConf = new tableConfiguration("queries/", "");

        $this->user = new dbTable("User", $this->tableConf, $dbCon);
        $this->subsitecf = new dbTable("SubsiteContentFragment", $this->tableConf, $dbCon);
        $this->subsite = new dbTable("Subsite", $this->tableConf, $dbCon);
        $this->planperm = new dbTable("PlanPermission", $this->tableConf, $dbCon);

        $this->fragments = new fragmentDefinitions($dbCon);
        $this->contentPieces = new contentPiecesDefinitions($dbCon);
    }


}
?>