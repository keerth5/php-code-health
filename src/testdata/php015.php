<?php
// BAD - will match
function add($a, $b) { return $a + $b; }

<?php
class Test {} // violation

// GOOD - will NOT match
<?php declare(strict_types=1);
function add(int $a, int $b): int { return $a + $b; }

<?php declare(strict_types=1);
class Test {}
