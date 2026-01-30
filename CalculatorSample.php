<?php
header("Content-Type: application/json");

const AUTH_USER = 'user';
const AUTH_PASS = 'user123';

function calculate(): array
{
    // Authentication check
    $username = $_SERVER['HTTP_USERNAME'] ?? null;
    $password = $_SERVER['HTTP_PASSWORD'] ?? null;

    if ($username !== AUTH_USER || $password !== AUTH_PASS) {
        throw new RuntimeException("Unauthorized access", 401);
    }
    // Allow only POST requests
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new RuntimeException("Only POST method is allowed", 405);
    }

    // Required fields check
    if (
        !isset($_POST['num1']) ||
        !isset($_POST['num2']) ||
        !isset($_POST['operation'])
    ) {
        throw new InvalidArgumentException(
            "num1, num2 and operation are required for calculation",
            400
        );
    }

    // Trim inputs
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $operation = trim($_POST['operation']);

    // Empty value check
    if ($num1 === "" || $num2 === "" || $operation === "") {
        throw new InvalidArgumentException("Values cannot be empty", 400);
    }

    // Numeric validation
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Numbers must be numeric", 400);
    }

    // Convert to numbers
    $num1 = (float) $num1;
    $num2 = (float) $num2;

    // Perform operation
    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;

        case "subtract":
            $result = $num1 - $num2;
            break;

        case "multiply":
            $result = $num1 * $num2;
            break;

        case "divide":
            if ($num2 == 0.0) {
                throw new DomainException("Division by zero is not allowed", 400);
            }
            $result = $num1 / $num2;
            break;

        default:
            throw new InvalidArgumentException(
                "Invalid operation. Use add, subtract, multiply or divide",
                400
            );
    }

    // Success response
    return [
        "status"    => "success",
        "operation" => $operation,
        "num1"      => $num1,
        "num2"      => $num2,
        "result"    => $result
    ];
}

//response handler

try {
    $response = calculate();
    http_response_code(200);
    echo json_encode($response);
    return;
} catch (InvalidArgumentException $e) {
    http_response_code($e->getCode() ?: 400);
} catch (DomainException $e) {
    http_response_code($e->getCode() ?: 400);
} catch (RuntimeException $e) {
    http_response_code($e->getCode() ?: 500);
} catch (Throwable $e) {
    // Fallback for unexpected errors
    http_response_code(500);
}

echo json_encode([
    "status"  => "error",
    "message" => $e->getMessage()
]);
return;
