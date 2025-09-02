<?php
// =================== BAD EXAMPLES ===================

// Using extract() on POST data
extract($_POST);
extract($data);

// Multiple unsafe calls
if ($userInput) {
    extract($userInput);
}

// =================== GOOD EXAMPLES ===================

// Assigning variables manually
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

// Using foreach to assign variables explicitly
foreach ($data as $key => $value) {
    ${$key} = $value; // safer only if keys are controlled
}

// Another safe example
$settings = [
    'theme' => 'dark',
    'lang' => 'en'
];
$theme = $settings['theme'];
$lang = $settings['lang'];
?>
