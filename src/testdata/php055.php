<?php
// =================== BAD EXAMPLES ===================

// Using error suppression
$data = @file_get_contents($file);
$result = @$array['key'];
$user = @mysqli_fetch_assoc($query);

// =================== GOOD EXAMPLES ===================

// Proper error handling without suppression
$data = file_get_contents($file);
if ($data === false) handle_error();

if (isset($array['key'])) {
    $result = $array['key'];
} else {
    handle_error();
}

$user = mysqli_fetch_assoc($query);
if (!$user) handle_error();
?>
