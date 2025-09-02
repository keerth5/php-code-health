<?php
// =================== BAD EXAMPLES ===================

// Constant name in lowercase
define('max_users', 100);
define("minValue", 1);

// =================== GOOD EXAMPLES ===================

// Constant name in uppercase
define('MAX_USERS', 100);
define("MIN_VALUE", 1);

// Using class constants
class Config {
    public const MAX_USERS = 100;
    public const MIN_VALUE = 1;
}
?>
