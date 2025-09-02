<?php
// =================== BAD EXAMPLES ===================

// Using rand() for token generation (insecure)
$token = md5(rand());

// Using mt_rand() for random numbers (insecure)
$number = mt_rand(1, 100);

// Random password using rand (insecure)
$password = "user" . rand(1000, 9999);

// =================== GOOD EXAMPLES ===================

// Secure random token using random_bytes
$token = bin2hex(random_bytes(32));

// Secure random integer
$number = random_int(1, 100);

// Secure random password
$password = bin2hex(random_bytes(4));
?>
