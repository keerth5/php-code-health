<?php
// =================== BAD EXAMPLES ===================

// Unsafe multi-dimensional array access
$value = $array[$key1][$key2];
$result = $data['users'][$id];

// =================== GOOD EXAMPLES ===================

// Using null coalescing operator
$value = $array[$key1][$key2] ?? null;
$result = $data['users'][$id] ?? 'default';

// Using isset() check
if (isset($array[$key1][$key2])) {
    $value = $array[$key1][$key2];
} else {
    $value = null;
}
?>
