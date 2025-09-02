<?php
// =================== BAD EXAMPLES ===================

class UserService {
    private $db;
    function __construct() {
        $this->db = new Database(); // violation
    }
}

class OrderService {
    private $logger;
    function __construct() {
        $this->logger = new Logger(); // violation
    }
}

// =================== GOOD EXAMPLES ===================

class UserService {
    private $db;
    function __construct(Database $db) {
        $this->db = $db; // dependency injected
    }
}

class OrderService {
    private $logger;
    function __construct(Logger $logger) {
        $this->logger = $logger; // dependency injected
    }
}
?>
