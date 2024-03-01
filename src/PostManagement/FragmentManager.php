<?php
class FragmentManager {
    private $tables;
    private $flexibleTable;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
        $this->flexibleTable = new FlexibleTable($dbCon);
    }

    // editView-option
    public function HandleUpdate($fragmentId, $subsiteId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->subsitecf->OverwriteFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update the fragment.", "error");
            return false;
        }
    }

    public function HandleCreate($subsiteId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        $this->flexibleTable->Execute("INSERT INTO " . $_POST["ContentTableName"] . " () VALUES ()");
        $contentId = $this->flexibleTable->dbCon->lastInsertId();

        $_POST["ContentId"] = $contentId;

        try {
            $this->tables->subsitecf->InsertFromPostRequest($_POST);

            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account.", "error");
            return false;
        }

    }

    public function HandleDelete($fragmentId) {
        $subsitecf = $this->tables->subsitecf->SelectById($fragmentId);
        $this->tables->subsitecf->Delete($fragmentId);

        // TODO: implement news/linksection delete via table

        $this->flexibleTable->Execute("DELETE FROM " . $subsitecf["ContentTableName"] . " WHERE Id = " . $subsitecf["ContentId"]);
        
    }

    private function ValidateData($postData) {
        // numbers positive

        // position unique

        // maximum fragment count not exceeded
    }

}
?>