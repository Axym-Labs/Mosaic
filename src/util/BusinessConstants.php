<?php
class BusinessConstants {
    public static $MIN_PASSWORD_LENGTH = 8;
    public static $MAX_FRAGMENTS_PER_SUBSITE = 25;

    public static $USERNAME_FORMAT = "/^[a-zA-Z0-9\-._]*$/";
    public static $USERNAME_FORMAT_EXPLANATION = "Only letters, numbers, hyphens, underscores and dots allowed.";
}
?>