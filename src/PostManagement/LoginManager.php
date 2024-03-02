<?php
class LoginManager {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    // editView-option
    public function HandlePost($sessionManager, $notifier) {
        $postData = $_POST;
        
        list($valid, $notifier, $user) = $this->ValidateData($postData, $notifier);
        if (!$valid) {
            return false;
        }

        $sessionManager::SetUserId($user["UserId"]);
        
        return true;
    }

    private function ValidateData($postData, $notifier) {
        $success = true;
        // email correct pattern
        if (!filter_var($postData["email"], FILTER_VALIDATE_EMAIL)) {
            $notifier->Post("Invalid email format");
            $success = false;
        }
        // user with email exists
        $email = $_POST['email'];
        $user = $this->tables->user->Select("Email = '$email'", 1);
        if (count($user) == 0) {
            $notifier->Post("No user with this email found");
            $success = false;
        }
        // password matches
        if (!AuthorizationCheck::PasswordMatch($user, $postData["password"], $this->tables)) {
            $notifier->Post("Password does not match");
            $success = false;
        }

        return array($success, $notifier, $user);
    }

}
?>