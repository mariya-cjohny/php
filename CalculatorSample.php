<?php
header("Content-Type: application/json");

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(
        [
            "status" => "error",
            "message" => "Only POST method is allowed"
        ]
    );
    exit;
}


// Check if keys exist
if (!isset($_POST['num1']) || !isset($_POST['num2']) || !isset($_POST['operation'])) {
    http_response_code(400);
    echo json_encode(
        [
            "status" => "error",
            "message" => "num1, num2 and operation are required for calculation"
        ]
    );
    exit;
}

//Trim inputs
$num1 = trim($_POST['num1']);
$num2 = trim($_POST['num2']);
$operation = trim($_POST['operation']);

//check empty values 
if ($num1 === "" || $num2 === "" || $operation === "") {
    http_response_code(400);
    echo json_encode(
        [
            "status" => "error",
            "message" => "Values cannot be empty"
        ]
    );
    exit;
}

//check numeric values 
if (!is_numeric($num1) || !is_numeric($num2)) {
    http_response_code(400);
    echo json_encode(
        [
            "status" => "error",
            "message" => "Numbers must be numeric"
        ]
    );
    exit;
}

// Convert to numbers
$num1 = (float)$num1;
$num2 = (float)$num2;

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
        if ($num2 == 0) {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "Division by zero is not allowed"
            ]);
            exit;
        }
        $result = $num1 / $num2;
        break;

    default:
        http_response_code(400);
        echo json_encode([
            "status" => "error",
            "message" => "Invalid operation. Use add, subtract, multiply or divide"
        ]);
        exit;
}

http_response_code(200);
echo json_encode([
    "status" => "success",
    "operation" => $operation,
    "num1" => $num1,
    "num2" => $num2,
    "result" => $result
]);
