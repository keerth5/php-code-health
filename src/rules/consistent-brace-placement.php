<?php
/**
 * Sample file demonstrating inconsistent brace placement
 */

// ❌ VIOLATION: Function with brace on new line
function calculateTotal($items, $tax) 
{
    $sum = 0;
    foreach ($items as $item) {
        $sum += $item->price;
    }
    return $sum * (1 + $tax);
}

// ❌ VIOLATION: Class with brace on new line
class Product 
{
    private $id;
    private $name;
    
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

// ❌ VIOLATION: If statement with brace on new line
function checkStatus($status) {
    if ($status === 'active') 
    {
        return true;
    } else 
    {
        return false;
    }
}

// ❌ VIOLATION: Loop with brace on new line
function processItems($items) {
    foreach ($items as $item) 
    {
        processItem($item);
    }
    
    while ($item = array_pop($items)) 
    {
        finalizeItem($item);
    }
}

// ❌ VIOLATION: Try-catch with brace on new line
function safeOperation() {
    try 
    {
        riskyOperation();
    } catch (Exception $e) 
    {
        handleError($e);
    } finally 
    {
        cleanup();
    }
}

// ✅ COMPLIANT: Function with brace on same line
function calculateDiscount($price, $percent) {
    return $price * ($percent / 100);
}

// ✅ COMPLIANT: Class with brace on same line
class Order {
    private $id;
    
    public function __construct($id) {
        $this->id = $id;
    }
}

// ✅ COMPLIANT: If statement with brace on same line
function isValid($value) {
    if ($value > 0) {
        return true;
    } else {
        return false;
    }
}
