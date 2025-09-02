<?php
// =================== BAD EXAMPLES ===================

// Inefficient loop calling count() every iteration
for ($i = 0; $i < count($array); $i++) {
    process($array[$i]);
}

// Another inefficient example
for ($j = 0; $j < count($users); $j++) {
    echo $users[$j]->name;
}

// =================== GOOD EXAMPLES ===================

// Cache count outside the loop
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    process($array[$i]);
}

// Use foreach for better readability
foreach ($array as $item) {
    process($item);
}
?>
