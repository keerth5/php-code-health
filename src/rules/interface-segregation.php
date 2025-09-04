<?php
/**
 * Sample file demonstrating violations of interface segregation principle
 */

// ❌ VIOLATION: Large interface with too many methods
interface VehicleInterface {
    public function startEngine();
    public function stopEngine();
    public function accelerate($speed);
    public function brake();
    public function turnLeft();
    public function turnRight();
    public function openDoors();
    public function closeDoors();
    public function turnOnLights();
    public function turnOffLights();
    public function honk();
    public function changeGear($gear);
}

// ❌ VIOLATION: Another large interface with unrelated methods
interface UserServiceInterface {
    public function register($username, $password, $email);
    public function login($username, $password);
    public function logout();
    public function resetPassword($email);
    public function updateProfile($userData);
    public function deleteAccount($userId);
    public function sendEmail($userId, $subject, $message);
    public function validateToken($token);
}

// ❌ VIOLATION: Interface with many methods of different concerns
interface OrderProcessorInterface {
    public function createOrder($items);
    public function calculateTotal($order);
    public function applyDiscount($order, $coupon);
    public function processPayment($order, $paymentMethod);
    public function generateInvoice($order);
    public function sendConfirmationEmail($order);
    public function trackShipment($order);
    public function cancelOrder($orderId);
}

// ✅ COMPLIANT: Segregated interfaces
interface EngineInterface {
    public function startEngine();
    public function stopEngine();
}

interface SteeringInterface {
    public function turnLeft();
    public function turnRight();
}

interface LightingInterface {
    public function turnOnLights();
    public function turnOffLights();
}

// ✅ COMPLIANT: Class implementing segregated interfaces
class Car implements EngineInterface, SteeringInterface, LightingInterface {
    public function startEngine() {
        // Implementation
    }
    
    public function stopEngine() {
        // Implementation
    }
    
    public function turnLeft() {
        // Implementation
    }
    
    public function turnRight() {
        // Implementation
    }
    
    public function turnOnLights() {
        // Implementation
    }
    
    public function turnOffLights() {
        // Implementation
    }
}
