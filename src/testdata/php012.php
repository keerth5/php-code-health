<?php
// =================== BAD EXAMPLES ===================

// Direct assignment from POST (unsafe)
$email = $_POST['email'];
$username = $_GET['user'];

// Using REQUEST directly
$action = $_REQUEST['action'];

// Multiple inputs
$first = $_POST['first'];
$last = $_POST['last'];

// =================== GOOD EXAMPLES ===================

// Using filter_var for validation
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

// Sanitizing input with htmlspecialchars
$username = htmlspecialchars($_GET['user'], ENT_QUOTES, 'UTF-8');

// Using strip_tags to remove HTML
$comment = strip_tags($_POST['comment']);

// Combining sanitization and validation
$age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
?>
