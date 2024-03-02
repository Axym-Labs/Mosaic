<?php
class AuthorizationCheck {

    public static function IsAuthorizedSubsite($subsiteId, $userId, $tables) {
        $subsite = $tables->subsite->selectById($subsiteId);
        return $subsite["UserId"] == $userId;
    }

    public static function PasswordMatch($user, $password, $tables) {
        return $user["Password"] == PasswordEntryption::Encrypt($password, $user["Salt"]);
    }

    public static function PasswordMatchById($userId, $password, $tables) {
        $user = $tables->user->selectById($userId);
        return self::PasswordMatch($user, $password, $tables);
    }
}
?>