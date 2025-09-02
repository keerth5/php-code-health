<?php
// =================== BAD EXAMPLES ===================

// Direct POST usage without CSRF validation
if ($_POST['action'] == 'delete') {
    deleteUser();
}

$user = $_POST['username'];
$password = $_POST['password'];

// Multiple POST checks without CSRF
if ($_POST['role'] == 'admin') {
    grantAccess();
}

// =================== GOOD EXAMPLES ===================

// CSRF token validation
if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
    deleteUser();
}

// Using a framework method that validates CSRF internally
if (isValidCsrfToken($_POST['csrf_token'])) {
    updateSettings();
}
?>
