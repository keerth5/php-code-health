<?php
// =================== BAD EXAMPLES ===================

// Returning full array
function getProcessedItems($items) {
    return array_map(function($item) {
        return process($item);
    }, $items);
}

// Using array_filter and returning entire array
function getValidItems($items) {
    return array_filter($items, function($item) {
        return $item->isValid();
    });
}

// Manual accumulation
function getLargeDataset($items) {
    $results = [];
    foreach ($items as $item) {
        $results[] = process($item);
    }
    return $results;
}

// =================== GOOD EXAMPLES ===================

// Using generators
function getProcessedItemsGen($items) {
    foreach ($items as $item) {
        yield process($item);
    }
}

// Using yield with filtering
function getValidItemsGen($items) {
    foreach ($items as $item) {
        if ($item->isValid()) yield $item;
    }
}
?>
