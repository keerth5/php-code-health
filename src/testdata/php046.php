<?php
// =================== BAD EXAMPLES ===================

// Repeated HTTP requests without caching
$apiUrl = "https://example.com/data";
$data1 = file_get_contents($apiUrl);
$data2 = file_get_contents($apiUrl);

// Using curl_exec directly
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// =================== GOOD EXAMPLES ===================

// Caching file_get_contents
$cache = [];
if (!isset($cache[$apiUrl])) {
    $cache[$apiUrl] = file_get_contents($apiUrl);
}
$data = $cache[$apiUrl];

// Using curl_exec with caching
if (!isset($cache[$apiUrl])) {
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $cache[$apiUrl] = curl_exec($ch);
    curl_close($ch);
}
$data = $cache[$apiUrl];
?>
