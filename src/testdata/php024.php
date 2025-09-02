<?php
// =================== BAD EXAMPLES ===================

// Throwing generic exception
throw new Exception('Error occurred');
throw new Exception("Something went wrong");

// Multiple generic exceptions
if (!$user) {
    throw new Exception('User not found');
}

// =================== GOOD EXAMPLES ===================

// Throwing specific exceptions
throw new InvalidArgumentException('Invalid user ID provided', 1001);
throw new RuntimeException("Cannot connect to database");

// Multiple specific exceptions
if (!$user) {
    throw new OutOfBoundsException('User ID out of range');
}
?>
