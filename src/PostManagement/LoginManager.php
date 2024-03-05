<?php
class LoginManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($sessionManager, $notifier) {
        $postData = $_POST;
        
        list($valid, $notifier, $maybeUser) = $this->ValidateData($postData, $notifier);
        if (!$valid) {
            return false;
        }

        $sessionManager::SetUserId($maybeUser["UserId"]);
        
        return true;
    }

    private function ValidateData($postData, $notifier) {
        // email correct pattern
        if (!filter_var($postData["email"], FILTER_VALIDATE_EMAIL)) {
            $notifier->Post("Invalid email format");
            return array(false, $notifier, null);
        }
        // user with email exists
        $email = $postData['email'];
        $user = $this->tables->user->Select("Email = '$email'", 1);
        if (count($user) == 0) {
            $notifier->Post("No user with this email found");
            return array(false, $notifier, null);
        }
        // password matches
        if (!AuthorizationCheck::PasswordMatch($user, $postData["password"], $this->tables)) {
            $notifier->Post("Password does not match");
            return array(false, $notifier, null);
        }

        return array(true, $notifier, $user);
    }

}
?>