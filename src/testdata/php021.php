<?php
// =================== BAD EXAMPLES ===================

// Function without type hints
function processUser($userData) {
    // ...
}

function calculateTotal($price, $tax) {
    return $price + $tax;
}

// Another example
function sendEmail($recipient, $subject, $body) {
    // ...
}

// =================== GOOD EXAMPLES ===================

// Function with type hints
function processUser(array $userData): void {
    // ...
}

function calculateTotal(float $price, float $tax): float {
    return $price + $tax;
}

// Function with mixed type hints
function sendEmail(string $recipient, string $subject, string $body): bool {
    // ...
}
?>
