<?php
// =================== BAD EXAMPLES ===================

// Starting session without secure cookie parameters
session_start();

// Multiple session_start calls without configuration
session_start();
session_start();

// =================== GOOD EXAMPLES ===================

// Set secure cookie parameters before starting session
session_set_cookie_params([
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();

// Using array syntax for configuration
$params = [
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
];
session_set_cookie_params($params);
session_start();
?>
