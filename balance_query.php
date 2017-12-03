<?php
include 'db_connection.php';
$card = $_GET['card'];
$card_result = mysqli_query($connection, "SELECT Value FROM Breezecard WHERE BreezecardNum = '$card'");
$row = $card_result->fetch_row();
echo $row[0];
?>