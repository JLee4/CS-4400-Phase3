<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
    function balance_change() {
        xmlhttp = new XMLHttpRequest();
        var card_number = document.getElementById("card_num").options[document.getElementById("card_num").selectedIndex].text;
        xmlhttp.open("GET", "balance_query.php?card="+card_number,false);
        xmlhttp.onreadystatechange=function() {
            document.getElementById("card_value").innerHTML = "$" + this.responseText;
        };
        xmlhttp.send();
    }
</script>
<body>
<div id="window">
    <form name="form" method="POST">
        <p>
            <label>Breeze Card</label>
            <select id="card_num" onchange="balance_change()">
                <option selected disabled value="">Select a Breezecard</option>
                <?php
                $username = $_SESSION['Username'];
                $query = "SELECT BreezecardNum, Value FROM Breezecard WHERE BelongsTo = 'sandrapatel'";
                $sql = mysqli_query($connection, $query);
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"owner1\">" . $row['BreezecardNum'] . "</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label>Balance</label>
            <label id="card_value">
            </label>
        </p>
        <p>
            <label>Start At</label>
            <select>
                <?php
                $query = "SELECT Name, EnterFare FROM Station";
                $sql = mysqli_query($connection, $query);
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"owner1\">" . $row['Name'] . "</option>";
                }
                ?>
            </select>        </p>
        <p>
            <label>End At</label>
            <select>
                <?php
                $query = "SELECT Name, EnterFare FROM Station";
                $sql = mysqli_query($connection, $query);
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"owner1\">" . $row['Name'] . "</option>";
                }
                ?>
            </select>        </p>
        <p>
            <input type="button" id="trip_history_btn"  value="View Trip History" onclick="location.href='trip_history.php'">
            <input type="button" id="logout_btn" value="Log Out" onclick="location.href='login_form.php'">
        </p>

</div>
</body>
</html>