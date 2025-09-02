<?php
// =================== BAD EXAMPLES ===================

// Deep nesting with foreach and if statements
foreach ($items as $item) {
    if ($item->active) {
        if ($item->valid) {
            process($item);
        }
    }
}

// Nested loops
for ($i = 0; $i < 10; $i++) {
    while ($j < 5) {
        if ($j % 2 == 0) {
            echo $j;
        }
    }
}

// =================== GOOD EXAMPLES ===================

// Flattened loops using continue
foreach ($items as $item) {
    if (!$item->active) continue;
    if (!$item->valid) continue;
    process($item);
}

// Extracted methods
for ($i = 0; $i < 10; $i++) {
    handleIteration($i);
}
?>
