<?php
// =================== BAD EXAMPLES ===================

// Direct debug output
echo 'Debug: ' . $variable;
print_r($data);
var_dump($user);

// =================== GOOD EXAMPLES ===================

// Using a logger
$logger->debug('Processing user data', ['user_id' => $userId, 'data' => $data]);
$logger->info('User processed successfully', ['user_id' => $userId]);
?>
