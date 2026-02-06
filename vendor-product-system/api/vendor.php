<?php


require_once __DIR__ . '/../autoload.php';

use Auth\BasicAuth;
use Vendor\Vendor;

header('Content-Type: application/json');

// 1. Authenticate
BasicAuth::authenticate();

// 2. Read JSON body
$data = json_decode(file_get_contents('php://input'), true);

// 3. Validate request
if (
    empty($data['vendorId']) ||
    empty($data['name']) ||
    empty($data['contactEmail'])
) {
    throw new InvalidArgumentException('Invalid vendor data', 400);
}

// 4. Create Vendor object
$vendor = new Vendor(
    $data['vendorId'],
    $data['name'],
    $data['contactEmail']
);

// 5. Return response
echo json_encode($vendor->getDetails());
