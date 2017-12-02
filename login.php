<?php
include 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$username = trim($username);

$query = "SELECT * FROM User";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
?>