<?php
// =================== BAD EXAMPLES ===================

// Direct eval with user input (dangerous)
$user_input = $_GET['code'];
eval($user_input);

// eval with hardcoded code (still unsafe practice)
eval("echo 'Hello World';");

// eval inside a function
function runCode($code) {
    eval($code);
}

// =================== GOOD EXAMPLES ===================

// Using safer alternatives
// Example: parsing JSON instead of eval
$json = '{"name": "Alice"}';
$data = json_decode($json, true);
echo $data['name'];

// Example: using switch-case instead of eval
$action = $_GET['action'];
switch ($action) {
    case 'hello':
        echo "Hello!";
        break;
    case 'bye':
        echo "Goodbye!";
        break;
    default:
        echo "Unknown action.";
        break;
}
?>
