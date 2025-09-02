<?php
// =================== BAD EXAMPLES ===================

// Using isset() on array key
if (isset($array[$key])) {
    echo $array[$key];
}

// Multiple unsafe isset calls
if (isset($data['name'])) {
    echo $data['name'];
}

if (isset($config[$option])) {
    doSomething();
}

// =================== GOOD EXAMPLES ===================

// Using array_key_exists()
if (array_key_exists($key, $array)) {
    echo $array[$key];
}

// Multiple safe checks
if (array_key_exists('name', $data)) {
    echo $data['name'];
}

if (array_key_exists($option, $config)) {
    doSomething();
}
?>
