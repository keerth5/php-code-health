<?php
// =================== BAD EXAMPLES ===================

// Manual includes
require_once 'classes/User.php';
include 'classes/Database.php';
include_once 'helpers/functions.php';
require 'lib/Logger.php';

// =================== GOOD EXAMPLES ===================

// Using Composer autoloading
require __DIR__ . '/vendor/autoload.php';
$user = new App\User();
$logger = new App\Lib\Logger();

// Using PSR-4 autoloading
spl_autoload_register(function ($class) {
    include __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
});
?>
