<?php
/**
 * Sample file demonstrating deep nesting in loops and conditions
 */

// ❌ VIOLATION: Deeply nested loops and conditions
function processData($data) {
    foreach ($data as $category) {
        if ($category->isActive()) {
            foreach ($category->getItems() as $item) {
                if ($item->isInStock()) {
                    foreach ($item->getVariants() as $variant) {
                        if ($variant->isAvailable()) {
                            // Process variant
                            processVariant($variant);
                        }
                    }
                }
            }
        }
    }
}

// ❌ VIOLATION: Mixed nested loops and conditions
function analyzeUserData($users) {
    foreach ($users as $user) {
        if ($user->isActive()) {
            foreach ($user->getOrders() as $order) {
                if ($order->isCompleted()) {
                    foreach ($order->getItems() as $item) {
                        // Process item
                        processItem($item);
                    }
                }
            }
        }
    }
}

// ❌ VIOLATION: Nested for loops with if condition
function calculateMatrix($matrix) {
    $result = [];
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > 0) {
                for ($k = 0; $k < $matrix[$i][$j]; $k++) {
                    $result[] = [$i, $j, $k];
                }
            }
        }
    }
    return $result;
}

// ❌ VIOLATION: Nested foreach with while and if
function processQueue($queues) {
    foreach ($queues as $queue) {
        while ($item = $queue->next()) {
            if ($item->isValid()) {
                if ($item->needsProcessing()) {
                    // Process item
                    processQueueItem($item);
                }
            }
        }
    }
}

// ✅ COMPLIANT: Flattened structure using early returns and helper functions
function processDataFlattened($data) {
    foreach ($data as $category) {
        if (!$category->isActive()) {
            continue;
        }
        
        processCategory($category);
    }
}

function processCategory($category) {
    foreach ($category->getItems() as $item) {
        if (!$item->isInStock()) {
            continue;
        }
        
        processItemVariants($item);
    }
}

function processItemVariants($item) {
    foreach ($item->getVariants() as $variant) {
        if ($variant->isAvailable()) {
            processVariant($variant);
        }
    }
}
