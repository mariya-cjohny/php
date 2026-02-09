<?php
session_start();

require_once __DIR__ . '/../autoload.php';

use Product\Product;

if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

//Validate input
if (
    empty($_POST['sku']) ||
    empty($_POST['price']) ||
    !isset($_POST['stock'])
) {
    die('Invalid product data');
}

//Create Product object
$product = new Product(
    $_POST['sku'],
    (float) $_POST['price'],
    (int) $_POST['stock']
);

//Store product
$_SESSION['products'][] = $product->getDetails();

//Redirect back to dashboard
header('Location: /php/vendor-product-system/public/dashboard.php?product=added');
exit;
