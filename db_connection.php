<?php

$username = 'cs4400_Group_81';
$password = 'gobbSdYz';
$host = 'academic-mysql.cc.gatech.edu';
$database = 'cs4400_Group_81';

$connection = mysqli_connect($host, $username, $password, $database) or die("Cannot connect to DB");
$result = $connection->query("SELECT * FROM User");
while ($row = $result->fetch_assoc()) {
    echo $row['Username']."<br>";
}?>