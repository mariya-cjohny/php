<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

$products = $_SESSION['products'] ?? [];
$vendorName = $_SESSION['vendor']['name'] ?? 'Vendor';

$productMessage = '';
if (isset($_GET['product']) && $_GET['product'] === 'added') {
    $productMessage = 'Product added successfully!';
}

$message = '';
if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
    $message = 'Signup successful. Welcome!';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>
    <div class="top-header">
        <h2>Welcome, <?= htmlspecialchars($vendorName) ?></h2>
        <button onclick="location.href='logout.php'">Logout</button>
    </div>

    <div class="side-panel">
        <h3>Actions</h3>
        <button onclick="location.href='addProduct.php'">Add Product</button>
    </div>
    <div class="dashboard-layout">

        <div class="main-content">

            <?php if ($message): ?>
                <p class="success"><?= $message ?></p>
            <?php endif; ?>

            <h2>Added Products</h2>

            <?php if (empty($products)): ?>
                <p>No products added yet.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>

                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['sku']) ?></td>
                            <td><?= number_format($product['price'], 2) ?></td>
                            <td><?= $product['stock'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
            <?php if ($productMessage): ?>
                <p class="success"><?= $productMessage ?></p>
            <?php endif; ?>

        </div>
    </div>

</body>

</html>