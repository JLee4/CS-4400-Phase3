<?php
include 'db_connection.php';
$user = $_GET['user'];
$email = $_GET['email'];
$user_result = mysqli_query($connection, "SELECT Username FROM User WHERE Username = '$user'");
$email_result = mysqli_query($connection, "SELECT Email FROM Passenger WHERE Email = '$email'");
if ($user_result->num_rows != 0 || $email_result->num_rows != 0) {
    echo true;
} else {
    echo false;
}
?>