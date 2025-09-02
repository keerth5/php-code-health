<?php
// =================== BAD EXAMPLES ===================

// Using define() for constants
define('MAX_USERS', 100);
define("API_KEY", "abcdef123456");

// Multiple defines
define('TIMEOUT', 30);
define('RETRY_LIMIT', 5);

// =================== GOOD EXAMPLES ===================

// Using class constants
class Config {
    public const MAX_USERS = 100;
    public const API_KEY = "abcdef123456";
}

// Multiple class constants
class Settings {
    public const TIMEOUT = 30;
    public const RETRY_LIMIT = 5;
}
?>
