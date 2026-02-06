<?php


require_once __DIR__ . '/../autoload.php';

use Auth\BasicAuth;
use Product\Product;

header('Content-Type: application/json');

BasicAuth::authenticate();

//Read JSON body
$data = json_decode(file_get_contents('php://input'), true);

// Validate request
if (
    empty($data['sku']) ||
    !isset($data['price']) ||
    !isset($data['stock'])
) {
    throw new InvalidArgumentException('Invalid product data', 400);
}

//Product object
$product = new Product(
    $data['sku'],
    (float) $data['price'],
    (int) $data['stock']
);

//Return response
echo json_encode($product->getDetails());
