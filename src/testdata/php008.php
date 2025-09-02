<?php
// =================== BAD EXAMPLES ===================

// Direct user input into exec (command injection risk)
$dir = $_GET['dir'];
exec("ls " . $dir);

// Using system() with variable
system("cat " . $_POST['file']);

// Using shell_exec() with variable
$output = shell_exec("ping -c 1 " . $_REQUEST['host']);

// =================== GOOD EXAMPLES ===================

// Using escapeshellarg for sanitization
$dir = $_GET['dir'];
exec("ls " . escapeshellarg($dir));

// Static safe command
system("ls -la");

// Proper whitelisting
$allowed = ['home', 'etc'];
if (in_array($_GET['dir'], $allowed)) {
    exec("ls " . $_GET['dir']);
}
?>
