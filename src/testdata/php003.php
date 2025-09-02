<?php
// =================== BAD EXAMPLES ===================

// Directly echoing user input (XSS risk)
$user_input = $_GET['name'];
echo $user_input;

// Concatenating user input into output
echo "<p>Hello " . $user_input . "</p>";

// Multiple variables directly
echo $first_name . " " . $last_name;

// =================== GOOD EXAMPLES ===================

// Escaping with htmlspecialchars
echo htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');

// Escaping with htmlentities
echo htmlentities($user_input);

// Safe static output
echo "<p>Hello World!</p>";
?>
