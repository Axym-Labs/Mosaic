<?php
class SessionManager {
    
    public static function GetUserId() {
        return $_SESSION['userId'];
    }

    public static function SetUserId($userId) {
        $_SESSION['userId'] = $userId;
    }

    
}
?>