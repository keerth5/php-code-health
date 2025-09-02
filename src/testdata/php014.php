<?php
// =================== BAD EXAMPLES ===================

// Creating a PDO connection but never closing it
$pdo = new PDO($dsn, $user, $pass);

// Another open connection
$conn = new PDO($dsn, $user, $pass);

// Multiple PDO instances without closure
$db1 = new PDO($dsn1, $u1, $p1);
$db2 = new PDO($dsn2, $u2, $p2);

// =================== GOOD EXAMPLES ===================

// Create and properly close PDO connection
$pdo = new PDO($dsn, $user, $pass);
// ... use connection ...
$pdo = null;

// Using multiple PDO instances safely
$db1 = new PDO($dsn1, $u1, $p1);
// ... use db1 ...
$db1 = null;

$db2 = new PDO($dsn2, $u2, $p2);
// ... use db2 ...
$db2 = null;
?>
