<?php
/**
 * Sample file demonstrating missing trailing commas in arrays
 */

// ❌ VIOLATION: Array without trailing comma
$fruits = [
    'apple',
    'banana',
    'orange'
];

// ❌ VIOLATION: Associative array without trailing comma
$person = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// ❌ VIOLATION: Nested array without trailing commas
$nestedArray = [
    'fruits' => [
        'apple',
        'banana'
    ],
    'vegetables' => [
        'carrot',
        'broccoli'
    ]
];

// ❌ VIOLATION: Array with numeric keys without trailing comma
$numbers = [
    1,
    2,
    3
];

// ❌ VIOLATION: Array with variable values without trailing comma
$config = [
    'debug' => $debug,
    'environment' => $env,
    'version' => $version
];

// ✅ COMPLIANT: Array with trailing comma
$compliantFruits = [
    'apple',
    'banana',
    'orange',
];

// ✅ COMPLIANT: Associative array with trailing comma
$compliantPerson = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
];

// ✅ COMPLIANT: Single-line array (no need for trailing comma)
$singleLine = ['apple', 'banana', 'orange'];
