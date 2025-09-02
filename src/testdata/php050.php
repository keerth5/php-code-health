<?php
// =================== BAD EXAMPLES ===================

// Function return value not validated
$result = risky_function();
process($result);

// Another risky example
$data = fetch_data($url);
use_data($data);

// =================== GOOD EXAMPLES ===================

// Validating return values
$result = risky_function();
if ($result === false) throw new Exception('Operation failed');
process($result);

// Checking function result before use
$data = fetch_data($url);
if ($data === null) throw new Exception('Failed to fetch data');
use_data($data);
?>
