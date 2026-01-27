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
if (!isset($_POST['num1']) || !isset($_POST['num2'])) {
    http_response_code(400);
    echo json_encode(
        [
            "status" => "error",
            "message" => "Two numbers are required for calculation"
        ]
    );
    exit;
}

//Trim inputs
$num1 = trim($_POST['num1']);
$num2 = trim($_POST['num2']);

//check empty values 
if ($num1 === "" || $num2 === "") {
    http_response_code(400);
    echo json_encode(
        [
            "status" => "error",
            "message" => "Numbers cannot be empty"
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

$sum = $num1 + $num2;

http_response_code(200);
echo json_encode([
    "status" => "success",
    "num1" => $num1,
    "num2" => $num2,
    "sum"  => $sum
]);
