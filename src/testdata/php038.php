<?php
// =================== BAD EXAMPLES ===================

// Unused import
use App\UnusedClass;

class MyClass {
    // UnusedClass is never referenced
}

// Multiple unused imports
use Vendor\Library\OldClass;
use Vendor\Library\AnotherClass;

class Demo {
    // OldClass and AnotherClass not used
}

// =================== GOOD EXAMPLES ===================

// Used import
use App\UsedClass;

class MyClass extends UsedClass {
    // UsedClass is referenced
}

// Multiple used imports
use Vendor\Library\NewClass;
use Vendor\Library\Helper;

class Demo extends NewClass {
    public function run() {
        $helper = new Helper();
    }
}
?>
