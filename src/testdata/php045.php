<?php
// =================== BAD EXAMPLES ===================

// Using in_array with large array literal
$needle = 5;
if (in_array($needle, array(1,2,3,4,5,6,7,8,9,10,11))) {
    echo "Found";
}

// Using array_search
$index = array_search($needle, array(1,2,3,4,5,6,7,8,9,10));
if ($index !== false) {
    echo "Found at $index";
}

// =================== GOOD EXAMPLES ===================

// Using array_flip and isset for performance
$largeArray = range(1, 1000);
$lookupTable = array_flip($largeArray);
if (isset($lookupTable[$needle])) {
    echo "Found";
}

// Using associative arrays
$users = [
    'alice' => true,
    'bob' => true,
    'carol' => true
];
if (isset($users['alice'])) {
    echo "Found Alice";
}
?>
