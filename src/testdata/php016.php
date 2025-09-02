<?php
// =================== BAD EXAMPLES ===================

// Using file_get_contents without error check
$data = file_get_contents($url);

// Using fopen without checking for false
$handle = fopen("file.txt", "r");

// Using mysqli_connect without verifying connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Multiple unsafe calls
$content = file_get_contents($file1);
$handle2 = fopen($file2, "w");

// =================== GOOD EXAMPLES ===================

// Proper error handling with if
$data = file_get_contents($url);
if ($data === false) {
    throw new Exception("Failed to fetch data");
}

// fopen with error check
$handle = fopen("file.txt", "r");
if (!$handle) {
    die("Cannot open file");
}

// mysqli_connect with verification
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
