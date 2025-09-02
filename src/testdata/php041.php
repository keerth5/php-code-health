<?php
// =================== BAD EXAMPLES ===================

// Nested if statements
if ($user) {
    if ($user->isActive()) {
        process();
    }
}

// Multiple nested levels
if ($order) {
    if ($order->isPaid()) {
        if ($order->isShipped()) {
            shipOrder();
        }
    }
}

// =================== GOOD EXAMPLES ===================

// Early return style
if (!$user) return;
if (!$user->isActive()) return;
process();

// Multiple early returns
if (!$order) return;
if (!$order->isPaid()) return;
if (!$order->isShipped()) return;
shipOrder();
?>
