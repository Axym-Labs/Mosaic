<?php
class AccountManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandleUpdate($userId, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($_POST, $notifier, $userId);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->user->OverwriteFromPostRequest($postData);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your account.", "error");
            return false;
        }
    }

    public function HandleCreate($sessionManager, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($_POST, $notifier);
        if (!$valid) {
            return false;
        }

        try {
            $this->tables->user->InsertFromPostRequest($postData);
            return true;
        } catch (Exception $e) {
            $notifier->Post("Error: Could not create your account.", "error");
            return false;
        }
    }

    private function ValidateAndFillEntity($postData, $notifier) {
        list($valid, $notifier) = $this->ValidateData($postData, $notifier);
        if (!$valid) {
            return array($postData, false, $notifier);
        }
        $postData = $this->DefineAutoValues($postData);
        return array($postData, true, $notifier);
    }

    private function ValidateData($postData, $notifier, $existingUserId = -1) {
        // varchars dont exceed db limits
        list($success, $exceededColumns) = $this->tables->user->CheckStringLengthLimits($postData);
        if (!$success) {
            $notifier->Post("The following fields exceed the maximum length: " . implode(", ", $exceededColumns));
            return array(false, $notifier);
        }
        // email correct pattern
        if (!filter_var($postData["email"], FILTER_VALIDATE_EMAIL)) {
            $notifier->Post("Invalid email format");
            return array(false, $notifier);
        }
        // username correct pattern
        if (!preg_match(BusinessConstants::$USERNAME_FORMAT, $postData["username"])) {
            $notifier->Post("Invalid username format: " . BusinessConstants::$USERNAME_FORMAT_EXPLANATION);
            return array(false, $notifier);
        }
        // password long enough
        if (strlen($postData["password"]) < BusinessConstants::$MIN_PASSWORD_LENGTH) {
            $notifier->Post("Password must be at least 8 characters long");
            return array(false, $notifier);
        }
        // username unique
        $usernames = $this->tables->user->Select("username = "+ $postData["username"]);
        if (count($usernames) > 0 && $usernames[0]["UserId"] != $existingUserId) {
            $notifier->Post("Username already exists");
            return array(false, $notifier);
        }
        // email unique
        $emails = $this->tables->user->Select("email = "+ $postData["email"]);
        if (count($emails) > 0 && $emails[0]["UserId"] != $existingUserId) {
            $notifier->Post("Email already exists");
            return array(false, $notifier);
        }

        return array(true, $notifier);
    }

    private function DefineAutoValues($postData) {
        $postData["PlanId"] = 1;
        $postData["Salt"] = AuthorizationCheck::GenerateSalt();
        return $postData;
    }

}
?>