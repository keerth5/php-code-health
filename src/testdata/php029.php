<?php
// =================== BAD EXAMPLES ===================

// Using old array() syntax
$data = array('key' => 'value');
$users = array('Alice', 'Bob', 'Charlie');

// Multiple old arrays
$config = array('timeout' => 30, 'retry' => 5);

// =================== GOOD EXAMPLES ===================

// Using modern array syntax
$data = ['key' => 'value'];
$users = ['Alice', 'Bob', 'Charlie'];

// Multiple modern arrays
$config = ['timeout' => 30, 'retry' => 5];
?>
