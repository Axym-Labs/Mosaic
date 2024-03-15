<?php
class AuthorizationCheck {

    public static function IsAuthorizedSubsite($subsiteId, $userId, $tables) {
        $subsitesWithId = $tables->subsite->selectById($subsiteId);
        if (count($subsitesWithId) == 0) {
            return false;
        }
        return $subsitesWithId[0]["UserId"] == $userId;
    }

    public static function PasswordMatch($user, $password) {
        $logger = new FileLogger("Logs/log.txt");
        $logger->Log("PasswordMatch: " . $user["Password"] . " " . AuthorizationCheck::HashPassword($password, $user["Salt"]));
        return str_starts_with(AuthorizationCheck::HashPassword($password, $user["Salt"]), $user["Password"]);
    }

    public static function PasswordMatchById($userId, $password, $tables) {
        $user = $tables->user->selectById($userId);
        return self::PasswordMatch($user, $password, $tables);
    }

    public static function GenerateSalt() {
        // of length 10
        return bin2hex(random_bytes(5));
    }

    public static function HashPassword($password, $salt) {
        return PasswordEntryption::Encrypt($password, $salt);
    }
}
?>