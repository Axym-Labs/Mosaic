<?php
class PasswordEntryption {
    
    public static function Encrypt($password, $salt) {
        return hash("sha256", $password . $salt);
    }
}
?>