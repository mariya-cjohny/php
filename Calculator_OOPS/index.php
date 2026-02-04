<?php
header("Content-Type: application/json");

require_once 'Calculator.php';
require_once 'ResponseHandler.php';

// Global exception handler
set_exception_handler(fn(Throwable $e) => ResponseHandler::error($e));

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    throw new RuntimeException("Only POST method allowed", 405);
}

$calculator = new Calculator();

// Validate input
[$num1, $num2, $operation] = $calculator->validate($_POST);

// Perform calculation
$result = $calculator->calculate($operation, $num1, $num2);

// Send response
ResponseHandler::success([
    "status" => "success",
    "operation" => $operation,
    "num1" => $num1,
    "num2" => $num2,
    "result" => $result
]);
