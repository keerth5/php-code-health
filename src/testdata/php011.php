<?php
// =================== BAD EXAMPLES ===================

// Unsafe PDO query with variable interpolation
$name = $_POST['name'];
$result = $pdo->query("SELECT * FROM users WHERE name = '$name'");

// Concatenated variable in query
$id = $_GET['id'];
$result = $pdo->query("SELECT * FROM users WHERE id = " . $id);

// Multiple variables interpolated
$first = $_POST['first'];
$last = $_POST['last'];
$result = $pdo->query("SELECT * FROM users WHERE first_name = '$first' AND last_name = '$last'");

// =================== GOOD EXAMPLES ===================

// Using prepared statements
$stmt = $pdo->prepare("SELECT * FROM users WHERE name = ?");
$stmt->execute([$name]);

// Named placeholders
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([':id' => $id]);

// Safe static query
$result = $pdo->query("SELECT COUNT(*) FROM users");
?>
