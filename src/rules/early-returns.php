<?php
/**
 * Sample file demonstrating excessive nesting instead of early returns
 */

// ❌ VIOLATION: Deeply nested conditions
function processOrder($order) {
    if ($order->isValid()) {
        if ($order->hasItems()) {
            if ($order->getCustomer()->hasValidPaymentMethod()) {
                // Process the order
                $order->process();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// ❌ VIOLATION: Nested ifs with method calls
function validateUser($user) {
    if ($user->exists()) {
        if ($user->isActive()) {
            if ($user->hasPermission('admin')) {
                $user->grantAccess();
                return true;
            } else {
                $user->denyAccess();
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// ❌ VIOLATION: Nested blocks with complex logic
function calculateDiscount($product, $user) {
    if ($product->isDiscountable()) {
        if ($user->isLoggedIn()) {
            if ($user->isMember()) {
                $discount = 0.1;
                if ($user->isPremium()) {
                    $discount = 0.2;
                    if ($product->isOnSale()) {
                        $discount += 0.05;
                    }
                }
                return $product->price * (1 - $discount);
            } else {
                return $product->price;
            }
        } else {
            return $product->price;
        }
    } else {
        return $product->price;
    }
}

// ❌ VIOLATION: Nested if with curly braces
function processPayment($payment) {
    if ($payment->isValid()) {
        {
            $payment->process();
            return true;
        }
    } else {
        return false;
    }
}

// ✅ COMPLIANT: Using early returns
function processOrderWithEarlyReturns($order) {
    if (!$order->isValid()) {
        return false;
    }
    
    if (!$order->hasItems()) {
        return false;
    }
    
    if (!$order->getCustomer()->hasValidPaymentMethod()) {
        return false;
    }
    
    // Process the order
    $order->process();
    return true;
}
