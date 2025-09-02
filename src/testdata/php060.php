<?php
// =================== BAD EXAMPLES ===================

// File opened but never closed
$file = fopen($filename, 'r');
$data = fread($file, filesize($filename));

// Another example
$log = fopen('log.txt', 'a');

// =================== GOOD EXAMPLES ===================

// Proper file handling using try-finally
$file = fopen($filename, 'r');
try {
    $data = fread($file, filesize($filename));
} finally {
    fclose($file);
}

// Simple proper closing
$log = fopen('log.txt', 'a');
fwrite($log, "Log entry");
fclose($log);
?>
