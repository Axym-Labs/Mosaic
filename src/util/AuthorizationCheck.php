<?php
class AuthorizationCheck {

    public static function IsAuthorizedSubsite($subsiteId, $userId, $tables) {
        $subsite = $tables->subsite->selectById($subsiteId);
        return $subsite["UserId"] == $userId;
    }

    public static function PasswordMatch($userId, $password, $tables) {
        $user = $tables->user->selectById($userId);
        return $user["Password"] == PasswordEntryption::Encrypt($password, $user["Salt"]);

    }
}
?>