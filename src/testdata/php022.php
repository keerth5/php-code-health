<?php
// =================== BAD EXAMPLES ===================

// Using global variable in function
global $database;
function getUsers() {
    global $database;
    // ...
}

// Another global
function connectDB() {
    global $dbConnection;
    // ...
}

// Multiple globals
global $config, $settings;

// =================== GOOD EXAMPLES ===================

// Passing dependencies via parameters
function getUsers(Database $database) {
    // ...
}

function connectDB(Database $dbConnection) {
    // ...
}

// Using class properties instead of globals
class App {
    private Database $database;
    public function __construct(Database $database) {
        $this->database = $database;
    }
    public function getUsers() {
        // use $this->database
    }
}
?>
