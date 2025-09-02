<?php
// =================== BAD EXAMPLES ===================

// Non-strict equality
if ($value == true) {
    echo "Value is true";
}

// Non-strict inequality
if ($count != 0) {
    echo "Count is not zero";
}

// Multiple violations
if ($a == $b && $c != $d) {
    // ...
}

// =================== GOOD EXAMPLES ===================

// Strict equality
if ($value === true) {
    echo "Value is true";
}

// Strict inequality
if ($count !== 0) {
    echo "Count is not zero";
}

// Multiple strict comparisons
if ($a === $b && $c !== $d) {
    // ...
}
?>
