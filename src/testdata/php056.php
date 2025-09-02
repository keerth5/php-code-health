<?php
// =================== BAD EXAMPLES ===================

// Hypothetical large class with 500+ lines
class GodClass {
    public function method1() { /* ... */ }
    public function method2() { /* ... */ }
    // ... imagine 500+ lines here ...
}

// =================== GOOD EXAMPLES ===================

// Split into focused classes
class UserManager {
    public function createUser() { /* ... */ }
    public function deleteUser() { /* ... */ }
}

class ReportGenerator {
    public function generateReport() { /* ... */ }
}
?>
