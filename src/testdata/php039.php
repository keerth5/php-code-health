<?php
// =================== BAD EXAMPLES ===================

// Simple double-quoted strings
$message = "Hello world";
$name = "Alice";
$text = "Sample text";

// Multiple violations
$greeting = "Hi there";

// =================== GOOD EXAMPLES ===================

// Single-quoted strings
$message = 'Hello world';
$name = 'Alice';

// Double-quoted strings with variable interpolation (allowed)
$message = "Hello $name";

// Double-quoted strings with escape sequences (allowed)
$path = "C:\\Users\\Alice";
?>
