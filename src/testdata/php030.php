<?php
// =================== BAD EXAMPLES ===================

// Function with too many parameters
function createUser($name, $email, $age, $city, $country, $phone) {
    // ...
}

// Another long function
function calculateOrder($item, $quantity, $price, $tax, $discount, $shipping) {
    // ...
}

// =================== GOOD EXAMPLES ===================

// Function with a single object parameter
function createUser(UserData $userData) {
    // ...
}

// Another good example
function calculateOrder(OrderData $orderData) {
    // ...
}
?>
