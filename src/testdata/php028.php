<?php
// =================== BAD EXAMPLES ===================

// Property without visibility
class User {
    var $name;
    var $email;

    function getName() {
        return $this->name;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}

// Another class
class Product {
    var $price;

    function getPrice() {
        return $this->price;
    }
}

// =================== GOOD EXAMPLES ===================

// Properties with visibility
class User {
    private $name;
    private $email;

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

// Another class with proper visibility
class Product {
    protected $price;

    public function getPrice() {
        return $this->price;
    }
}
?>
