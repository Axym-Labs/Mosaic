<?php
class SessionManager {


    public function __construct() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (session_status() == PHP_SESSION_NONE) {
            $this->StartSession();
        }
    }

    public function IsUserLoggedIn() {
        return isset($_SESSION['userId']) && $_SESSION['userId'] != null;
    }
    
    public function StartSession() {
        session_start();
    }
    
    public function GetUserId() {
        if (!$this->IsUserLoggedIn()) {
            return null;
        }
        return $_SESSION['userId'];
    }

    public function SetUserId($userId) {
        $_SESSION['userId'] = $userId;
    }

}
?>