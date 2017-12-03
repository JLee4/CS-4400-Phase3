<?php
include 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, 1);
$email = $_POST['email'];
$card_num = $_POST['card_num'];
$username = trim($username);

$user_result = mysqli_query($connection, "INSERT INTO User (Username, Password) VALUES ('$username', '$password')") or die("DB error");
$passenger_result = mysqli_query($connection, "INSERT INTO Passenger (Username, Email) VALUES('$username', '$email')") or die("DB error");
$breezecard_result = mysqli_query($connection, "INSERT INTO Breezecard (BreezecardNum, Value, BelongsTo) VALUES('$card_num', '0.00', '$username')") or die("DB error");

if (!$user_result || !$passenger_result || !$breezecard_result) {
    echo "Could not insert into DB";
    header("Location: register_form.php");
    exit();
}

$_SESSION["Username"] = $username;
header("Location: passenger_menu.php");
exit();
?>