<!-- HTML FORM (POST + FILE UPLOAD) -->
<form method="post" enctype="multipart/form-data">
    <label>Enter Username:</label>
    <input type="text" name="username"><br><br>

    <label>Upload File:</label>
    <input type="file" name="myfile"><br><br>

    <button type="submit">Submit</button>
</form>
<hr>
<?php

// 1. $GLOBALS
$x = 10;
$y = 20;

function addNumbers()
{
    echo "Using \$GLOBALS: ";
    echo $GLOBALS['x'] + $GLOBALS['y'];
    echo "<br>";
}

addNumbers();

// 2. $_SERVER
echo "<br><b>SERVER DETAILS</b><br>";
echo "Script Name: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";


// 3. $_GET
//URL:
// http://localhost/php/php_predefined_variables_demo.php?name=Mariya
if (isset($_GET['name'])) {
    echo "<br>Hello from GET: " . $_GET['name'] . "<br>";
}


// 4. $_POST
if (isset($_POST['username'])) {
    echo "<br>Hello from POST: " . $_POST['username'] . "<br>";
}

// 5. $_REQUEST
if (isset($_REQUEST['username'])) {
    echo "Hello from REQUEST: " . $_REQUEST['username'] . "<br>";
}

// 6. $_COOKIE
setcookie("course", "PHP", time() + 3600);

if (isset($_COOKIE['course'])) {
    echo "<br>Cookie value: " . $_COOKIE['course'] . "<br>";
}

// 7. $_SESSION
session_start();
$_SESSION['user'] = "Mariya";
echo "<br>Session user: " . $_SESSION['user'] . "<br>";

// 8. $_FILES
if (isset($_FILES['myfile'])) {
    echo "<br>Uploaded File Name: " . $_FILES['myfile']['name'] . "<br>";
    echo "File Size: " . $_FILES['myfile']['size'] . " bytes<br>";
}
?>