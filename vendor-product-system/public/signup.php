<!DOCTYPE html>
<html>

<head>
    <title>Vendor Signup</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="login-container">
        <h2>Vendor Signup</h2>

        <form method="post" action="../api/vendor.php">
            <input type="text" name="vendorId" placeholder="Vendor ID" required>
            <input type="text" name="name" placeholder="Vendor Name" required>
            <input type="email" name="contactEmail" placeholder="Email" required>

            <button type="submit">Sign Up</button>
        </form>

        <a href="login.php">Already have an account? Login</a>
    </div>
</body>

</html>