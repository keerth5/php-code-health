<?php
// =================== BAD EXAMPLES ===================

// Magic numbers in expressions
if ($age > 65) {
    echo "Retired";
}

$discount = $price * 0.15;

// Multiple magic numbers
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// =================== GOOD EXAMPLES ===================

// Using constants
const RETIREMENT_AGE = 65;
if ($age > self::RETIREMENT_AGE) {
    echo "Retired";
}

const TAX_RATE = 0.15;
$discount = $price * self::TAX_RATE;

// Loops with constants
const MAX_ITER = 10;
for ($i = 0; $i < self::MAX_ITER; $i++) {
    echo $i;
}
?>
