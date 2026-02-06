<?php


require_once __DIR__ . '/../autoload.php';

use Auth\BasicAuth;
use Vendor\Vendor;

header('Content-Type: application/json');

BasicAuth::authenticate();

//Read JSON body
$data = json_decode(file_get_contents('php://input'), true);

//Validate request
if (
    empty($data['vendorId']) ||
    empty($data['name']) ||
    empty($data['contactEmail'])
) {
    throw new InvalidArgumentException('Invalid vendor data', 400);
}

//Vendor object
$vendor = new Vendor(
    $data['vendorId'],
    $data['name'],
    $data['contactEmail']
);

//Return response
echo json_encode($vendor->getDetails());
