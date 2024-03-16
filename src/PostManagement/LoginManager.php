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

        $sessionManager->SetUserId($maybeUser["UserId"]);
        
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
        $valid = LoginManager::PasswordCorrect($user, $postData["Password"]);
        if (!$valid) {
            $notifier->Post("Password is not correct");
            return array(false, $notifier, null);
        }
        return array(true, $notifier, $user);
    }

    public static function PasswordCorrect($user, $password) {
        return AuthorizationCheck::PasswordMatch($user["Password"], $password);
    }

}
?>