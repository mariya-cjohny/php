<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Add Product
    </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="login-container">
        <h2>Add Product</h2>
        <form method="post" action="../api/product.php">
            <input type="text" name="sku" placeholder="SKU" required>
            <input type="number" step="0.01" name="price" placeholder="Price" required>
            <input type="number" name="stock" placeholder="Initial Stock" required>

            <button type="submit">Add Product</button>
        </form>

        <a href="dashboard.php">Back to Dashboard</a>
    </div>
</body>

</html>