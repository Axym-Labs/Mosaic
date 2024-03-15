<?php
class LoginManager {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    // editView-option
    public function HandlePost($sessionManager, $notifier) {
        $postData = $_POST;
        
        list($valid, $notifier, $maybeUser) = $this->ValidateData($postData, $notifier);
        if (!$valid) {
            return array(false, $notifier);
        }

        $sessionManager::SetUserId($maybeUser["UserId"]);
        
        return array(true, $notifier);
    }

    private function ValidateData($postData, $notifier) {
        // email correct pattern
        if (!filter_var($postData["Email"], FILTER_VALIDATE_EMAIL)) {
            $notifier->Post("Invalid email format");
            return array(false, $notifier, null);
        }
        // user with email exists
        $email = $postData['Email'];
        $usersWithEmail = $this->tables->user->Select("Email = '$email'", 1);
        if (count($usersWithEmail) == 0) {
            $notifier->Post("No user with this email found");
            return array(false, $notifier, null);
        }
        $user = $usersWithEmail[0];
        // password matches
        if (!AuthorizationCheck::PasswordMatch($user, $postData["Password"])) {
            $notifier->Post("Password does not match");
            return array(false, $notifier, null);
        }

        return array(true, $notifier, $user);
    }

}
?>