<?php
/**
 * Sample file demonstrating improper class constructors
 */

// ❌ VIOLATION: Class with method named like the class (old PHP4 style constructor)
class User {
    private $name;
    private $email;
    
    // Old style constructor named after the class
    public function User($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    
    public function getName() {
        return $this->name;
    }
}

// ❌ VIOLATION: Class with capitalized method name that looks like a constructor
class Product {
    private $id;
    private $name;
    
    // Method with capitalized name that looks like a constructor
    public function Initialize($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

// ❌ VIOLATION: Another class with method named like the class
class Order {
    private $items = [];
    
    public function Order($items) {
        $this->items = $items;
    }
}

// ❌ VIOLATION: Class with capitalized method that modifies $this
class Customer {
    private $id;
    
    public function Setup($id) {
        $this->id = $id;
    }
}

// ✅ COMPLIANT: Class with proper constructor
class Article {
    private $title;
    private $content;
    
    // Proper constructor using __construct
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
}

// ✅ COMPLIANT: Class with no constructor
class Category {
    private $name;
    
    public function setName($name) {
        $this->name = $name;
    }
}
