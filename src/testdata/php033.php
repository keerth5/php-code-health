<?php
// =================== BAD EXAMPLES ===================

// Function braces on new line
function test()
{
    echo "Hello";
}

if ($a > $b)
{
    echo "Invalid";
}

// Control structure braces on new line
while ($i < 10)
{
    $i++;
}

// =================== GOOD EXAMPLES ===================

// Braces on the same line
function test() {
    echo "Hello";
}

if ($a > $b) {
    echo "Valid";
}

while ($i < 10) {
    $i++;
}
?>
