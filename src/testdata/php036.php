<?php
// =================== BAD EXAMPLES ===================

// Multi-line array without trailing comma
$array = [
    'item1',
    'item2'
];

$users = [
    'Alice',
    'Bob'
];

// Nested array missing trailing comma
$config = [
    'timeout' => 30,
    'retry' => 5
];

// =================== GOOD EXAMPLES ===================

// Multi-line array with trailing comma
$array = [
    'item1',
    'item2',
];

$users = [
    'Alice',
    'Bob',
];

$config = [
    'timeout' => 30,
    'retry' => 5,
];
?>
