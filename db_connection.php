<?php

$username = 'cs4400_Group_81';
$password = 'gobbSdYz';
$host = 'academic-mysql.cc.gatech.edu';
$database = 'cs4400_Group_81';

$connection = mysqli_connect($host, $username, $password, $database) or die("Cannot connect to DB");
$result = $connection->query("SELECT * FROM User");
echo "<table>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['Username']."</td><td>".$row['Password']."</td></tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="window">
    <form name="form" method="POST">
        <p>
            <label>Username:</label>
            <input type="text" id="user" name="user">
        </p>
        <p>
            <label>Password:</label>
            <input type="password" id="pass" name="pass">
        </p>

</div>
</body>
</html>
