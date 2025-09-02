<?php
// =================== BAD EXAMPLES ===================

// Old-style constructor
class User {
    function User($name) {
        $this->name = $name;
    }
}

// Class with method but no __construct
class Product {
    function setPrice($price) {
        $this->price = $price;
    }
}

// Multiple methods but missing proper constructor
class Order {
    function create($id) {}
    function calculateTotal() {}
}

// =================== GOOD EXAMPLES ===================

// Proper __construct usage
class User {
    public function __construct($name) {
        $this->name = $name;
    }
}

// Another class with proper constructor
class Product {
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}
?>
