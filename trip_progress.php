<?php
include 'db_connection.php';
$card = $_GET['card'];
$start = $_GET['start'];
$end_r = $_GET['end'];

$value_result = mysqli_query($connection, "SELECT Value FROM Breezecard WHERE BreezecardNum = '$card'");
$fare_result = mysqli_query($connection, "SELECT EnterFare FROM Station WHERE Name = '$start'");
$value = $value_result->fetch_row()[0] - $fare_result->fetch_row()[0];
$start_result = mysqli_query($connection, "SELECT StopID FROM Station WHERE Name = '$start'");
$end_result = mysqli_query($connection, "SELECT StopID FROM Station WHERE Name = '$end_r'");
$breezecard_value = mysqli_query($connection, "UPDATE Breezecard SET Value = '$value' WHERE BreezecardNum = '$card'") or die("DB error");

//echo $card.$start.$end_r.$value;

$fare = $fare_result->fetch_row()[0];
$time = date("Y-m-d H:i:s");
$start = $start_result->fetch_row()[0];
$end_r = $end_result->fetch_row()[0];
//echo $fare . $time . $card . $start . $end_r;

$trip_result = mysqli_query($connection, "INSERT INTO Trip (Tripfare, StartTime, BreezecardNum, StartsAt, EndsAt) VALUES ('$fare', '$time', '$card', '$start', '$end_r')") or die("DB error");
exit();
?>