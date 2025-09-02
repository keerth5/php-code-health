<?php
// =================== BAD EXAMPLES ===================

// Legacy comparison using strcmp
if (strcmp($userInput, $expected) == 0) {
    processUser();
}

// Legacy strpos check
if (strpos($haystack, $needle) === false) {
    echo "Not found";
}

// =================== GOOD EXAMPLES ===================

// Using modern str_contains (PHP 8+)
if (!str_contains($haystack, $needle)) {
    echo "Not found";
}

// Using strict equality without strcmp
if ($userInput === $expected) {
    processUser();
}
?>
