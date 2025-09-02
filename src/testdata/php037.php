<?php
// =================== BAD EXAMPLES ===================

// Too much indentation
if ($condition)
             $result = true; // 13 spaces
echo "Hello";

while ($i < 10)
                                                         $i++; // 57 spaces

// =================== GOOD EXAMPLES ===================

// Proper indentation (4 spaces per level)
if ($condition) {
    $result = true;
}

while ($i < 10) {
    $i++;
}
?>
