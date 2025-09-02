<?php
// =================== BAD EXAMPLES ===================

// Assigned but never used
$unusedVar = 'value';
$temp = 123;

// Some used variable
$result = 5;
return $result;

// Multiple unused variables
$a = 10;
$b = 20;
$c = $a + $b; // 'c' used later
echo $c;

// =================== GOOD EXAMPLES ===================

// All variables used
$result = 5;
echo $result;

$total = 100;
$tax = 20;
$grandTotal = $total + $tax;
echo $grandTotal;
?>
