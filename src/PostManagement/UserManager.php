<?php
class UserManager {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function HandleUpdate($userId, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($_POST, $notifier, $userId);
        if (!$valid) {
            return array(false, $notifier);
        }

        try {
            $this->tables->user->OverwriteFromPostRequest($userId, $postData);
            return array(true, $notifier);
        } catch (Exception $e) {
            $notifier->Post("Error: Could not update your user.", "error");
            return array(false, $notifier);
        }
    }

    public function HandleCreate($sessionManager, $notifier) {
        list($postData, $valid, $notifier) = $this->ValidateAndFillEntity($_POST, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        $this->tables->user->InsertFromPostRequest($postData);
        return array(true, $notifier);
        // disable for now because bugs need to be found first
        // try {
        // } catch (Exception $e) {
        //     $logger = new FileLogger("Logs/log.txt");
        //     $logger->Log("Error: Could not create your user. " . $e->getMessage());
        //     $notifier->Post("Error: Could not create your user.", "error");
        //     return array(false, $notifier);
        // }
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
        if (!filter_var($postData["Email"], FILTER_VALIDATE_EMAIL)) {
            $notifier->Post("Invalid email format");
            return array(false, $notifier);
        }
        // username correct pattern
        if (!preg_match(BusinessConstants::$USERNAME_FORMAT, $postData["Username"])) {
            $notifier->Post("Invalid username format: " . BusinessConstants::$USERNAME_FORMAT_EXPLANATION);
            return array(false, $notifier);
        }
        // password matches
        if (array_key_exists("ConfirmPassword", $postData) && $postData["Password"] != $postData["ConfirmPassword"]) {
            $notifier->Post("Passwords do not match");
            return array(false, $notifier);
        }
        // password long enough
        if (strlen($postData["Password"]) < BusinessConstants::$MIN_PASSWORD_LENGTH) {
            $notifier->Post("Password must be at least 8 characters long");
            return array(false, $notifier);
        }
        // username unique
        $usernames = $this->tables->user->Select("Username = \"" . $postData["Username"] . "\"");
        if (count($usernames) > 0 && $usernames[0]["UserId"] != $existingUserId) {
            $notifier->Post("Username already exists");
            return array(false, $notifier);
        }
        // email unique
        $emails = $this->tables->user->Select("email = \"" . $postData["Email"] . "\"");
        if (count($emails) > 0 && $emails[0]["UserId"] != $existingUserId) {
            $notifier->Post("Email already exists");
            return array(false, $notifier);
        }

        return array(true, $notifier);
    }

    private function DefineAutoValues($postData) {
        $postData["PlanId"] = 1;
        $postData["Salt"] = AuthorizationCheck::GenerateSalt();
        $postData["Password"] = AuthorizationCheck::HashPassword($postData["Password"], $postData["Salt"]);
        return $postData;
    }

}
?>