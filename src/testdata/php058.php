<?php
// =================== BAD EXAMPLES ===================

// Loop without freeing memory
while ($row = $stmt->fetch()) {
    $data[] = $row;
}

// Another example
while ($item = $queue->dequeue()) {
    process($item);
}

// =================== GOOD EXAMPLES ===================

// Loop with proper memory management
while ($row = $stmt->fetch()) {
    process($row);
    unset($row);
}

// Or explicitly set to null
while ($item = $queue->dequeue()) {
    process($item);
    $item = null;
}
?>
