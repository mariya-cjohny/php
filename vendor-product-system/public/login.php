<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '123') {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vendor Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p style="color:red; text-align:center"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="signup.php">New Vendor? Sign up</a>
    </div>

</body>

</html>