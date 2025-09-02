<?php
// =================== BAD EXAMPLES ===================

// Nested ternary operator
$result = $a ? $b ? $c : $d : $e;

// Another example
$status = $x ? $y ? "yes" : "maybe" : "no";

// Multiple nested ternaries
$output = $p ? $q ? $r ? 1 : 2 : 3 : 4;

// =================== GOOD EXAMPLES ===================

// Single-level ternary
$result = $a ? $b : $c;

// Using if-else instead of nested ternary
if ($a) {
    $result = $b ? $c : $d;
} else {
    $result = $e;
}

// Another safe ternary
$status = $x ? "yes" : "no";
?>
