<?php
include 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$username = trim($username);

$query = "SELECT * FROM User WHERE Username = '$username'";
$result = mysqli_query($connection, $query) or die("DB error");
$result = mysqli_fetch_assoc($result);

if (count($result) > 1 || count($result) < 1) {
    header("Location: login_form.php");
    exit();
}
if (!password_verify($password, $result['Password'])) {
    header("Location: login_form.php");
    exit();
}

$_SESSION["Username"] = $username;
if ($result['isAdmin']) {
    header("Location: admin_menu.php");
    exit();
} else {
    header("Location: passenger_menu.php");
    exit();
}

mysqli_close($connection);
?>