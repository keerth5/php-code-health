<?php
// =================== BAD EXAMPLES ===================

// Direct mysql_query with variable interpolation (SQL injection risk)
$user_id = $_GET['id'];
$result = mysql_query("SELECT * FROM users WHERE id = $user_id");

// Using PDO->query with variable interpolation (SQL injection risk)
$name = $_POST['name'];
$stmt = $pdo->query("SELECT * FROM users WHERE name = '$name'");

// Concatenation inside query (still unsafe)
$email = $_POST['email'];
$stmt = $pdo->query("SELECT * FROM users WHERE email = '" . $email . "'");

// =================== GOOD EXAMPLES ===================

// Using prepared statements with placeholders
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);

// Named placeholders
$stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name");
$stmt->execute([':name' => $name]);

// Safe hardcoded query (no interpolation)
$stmt = $pdo->query("SELECT * FROM users WHERE active = 1");

?>
