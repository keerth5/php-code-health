<?php
// =================== BAD EXAMPLES ===================

// Operators without spaces
$total=$price+$tax;
$sum=$a-$b*$c/$d;
$count= $x+1;
$result = $a*2;

// Multiple violations
$value=$x/$y+$z;

// =================== GOOD EXAMPLES ===================

// Operators with proper spacing
$total = $price + $tax;
$sum = $a - $b * $c / $d;
$count = $x + 1;
$result = $a * 2;

// Multiple good examples
$value = $x / $y + $z;
?>
