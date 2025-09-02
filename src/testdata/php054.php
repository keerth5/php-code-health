<?php
// =================== BAD EXAMPLES ===================

// Excessive string concatenation
$message = 'Hello ' . $name . ', welcome to ' . $site . '!';
$log = 'User: ' . $user['name'] . ', ID: ' . $user['id'] . ', Role: ' . $user['role'];

// =================== GOOD EXAMPLES ===================

// Using sprintf for cleaner concatenation
$message = sprintf('Hello %s, welcome to %s!', $name, $site);
$log = sprintf('User: %s, ID: %s, Role: %s', $user['name'], $user['id'], $user['role']);
?>
