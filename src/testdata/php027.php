<?php
// =================== BAD EXAMPLES ===================

// Old-style ternary with isset
$name = isset($data['name']) ? $data['name'] : 'Default';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($user['age']) ? $user['age'] : 0;

// Multiple uses in one line
$city = isset($address['city']) ? $address['city'] : 'Unknown';

// =================== GOOD EXAMPLES ===================

// Using null coalescing operator
$name = $data['name'] ?? 'Default';
$email = $_POST['email'] ?? '';
$age = $user['age'] ?? 0;

// Multiple uses safely
$city = $address['city'] ?? 'Unknown';
?>
