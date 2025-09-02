<?php
// =================== BAD EXAMPLES ===================

// Allowing HTTP for sensitive operation
if ($_SERVER['REQUEST_SCHEME'] == 'http') {
    echo "Login allowed over HTTP (insecure)";
}

// Explicit check for http
if($_SERVER['REQUEST_SCHEME']=="http") {
    echo "Still insecure!";
}

// =================== GOOD EXAMPLES ===================

// Enforce HTTPS
if ($_SERVER['REQUEST_SCHEME'] !== 'https') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

// Secure login only via HTTPS
if ($_SERVER['REQUEST_SCHEME'] === 'https') {
    echo "Secure connection";
}
?>
