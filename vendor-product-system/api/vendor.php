<?php
session_start();

require_once __DIR__ . '/../autoload.php';

use Vendor\Vendor;

// Validate form data
if (
    empty($_POST['vendorId']) ||
    empty($_POST['name']) ||
    empty($_POST['contactEmail'])
) {
    die('Invalid signup data');
}

//Create Vendor object
$vendor = new Vendor(
    $_POST['vendorId'],
    $_POST['name'],
    $_POST['contactEmail']
);

// Mark user as logged in
$_SESSION['logged_in'] = true;
$_SESSION['vendor'] = $vendor->getDetails();

// 4. Redirect to dashboard
header('Location: /php/vendor-product-system/public/dashboard.php?signup=success');
exit;
