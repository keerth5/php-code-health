<?php
// =================== BAD EXAMPLES ===================

// Direct variable in include (unsafe)
$page = $_GET['page'];
include($page . ".php");

// Direct variable in require (unsafe)
require($_GET['module']);

// Using include_once with variable (unsafe)
include_once($_POST['file']);

// Using require_once with variable (unsafe)
require_once($userFile);

// =================== GOOD EXAMPLES ===================

// Safe static inclusion
include("header.php");
require("config.php");

// Safe whitelist check
$allowed = ['home', 'about'];
if (in_array($_GET['page'], $allowed)) {
    include($_GET['page'] . ".php");
}

// Another safe approach
$file = "footer.php";
require_once($file); // trusted static variable
?>
