<?php
// =================== BAD EXAMPLES ===================

// Using variables before initialization
$counter++;
--$index;

// =================== GOOD EXAMPLES ===================

// Proper initialization before increment/decrement
$counter = 0;
$counter++;

$index = 10;
$index--;
?>
