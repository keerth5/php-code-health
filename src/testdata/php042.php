<?php
// =================== BAD EXAMPLES ===================

// Interface with 4 methods
interface UserService {
    function getUser();
    function deleteUser();
    function sendEmail();
    function generateReport();
}

// Interface with 5 methods
interface OrderService {
    function createOrder();
    function cancelOrder();
    function updateOrder();
    function getOrder();
    function listOrders();
}

// =================== GOOD EXAMPLES ===================

// Split interfaces
interface UserRepository {
    function getUser();
    function deleteUser();
}

interface EmailService {
    function sendEmail();
}

interface ReportGenerator {
    function generateReport();
}
?>
