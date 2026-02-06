<?php


require_once __DIR__ . '/../autoload.php';

use Auth\BasicAuth;
use Product\Product;

header('Content-Type: application/json');

// 1. Authenticate
BasicAuth::authenticate();

// 2. Read JSON body
$data = json_decode(file_get_contents('php://input'), true);

// 3. Validate request
if (
    empty($data['sku']) ||
    !isset($data['price']) ||
    !isset($data['stock'])
) {
    throw new InvalidArgumentException('Invalid product data', 400);
}

// 4. Create Product object
$product = new Product(
    $data['sku'],
    (float) $data['price'],
    (int) $data['stock']
);

// 5. Return response
echo json_encode($product->getDetails());
