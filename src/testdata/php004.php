<?php
// =================== BAD EXAMPLES ===================

// Using md5 for passwords
$password = $_POST['password'];
$hash = md5($password);

// Using sha1 for passwords
$hash2 = sha1($password . "salt");

// Mixing with concatenation
$hash3 = md5("prefix" . $password . "suffix");

// =================== GOOD EXAMPLES ===================

// Using password_hash with default algorithm
$hash = password_hash($password, PASSWORD_DEFAULT);

// Using password_hash with bcrypt explicitly
$hash2 = password_hash($password, PASSWORD_BCRYPT);

// Verifying password with password_verify
if (password_verify($password, $hash)) {
    echo "Valid password!";
}
?>
