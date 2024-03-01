<?php
class SubsiteManager {
    private $tables;
    private $fragmentManager;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
        $this->fragmentManager = new FragmentManager($dbCon);
    }

    // editView-option
    public function HandleUpdate($subsiteId, $userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->subsite->OverwriteFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your site.", "error");
            return false;
        }
    }

    public function HandleCreate($userId, $notifier) {
        list($valid, $notifier) = $this->ValidateData($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->subsite->InsertFromPostRequest($_POST);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account.", "error");
            return false;
        }
    }

    public function HandleDelete($subsiteId) {
        $fragments = $this->tables->subsitecf->Select("WebsiteId = $subsiteId");
        
        foreach ($fragments as $fragment) {
            $this->fragmentManager->HandleDelete($fragment["SubsiteContentFragmentId"]);
        }

        $this->tables->subsite->Delete($subsiteId);
    }

    private function ValidateData($postData, $notifier) {
        // subsite limit not exceeded

        // route unique
        
        // if not empty: shortroute unique

    }
}
?>