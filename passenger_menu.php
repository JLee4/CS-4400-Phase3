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
    function startTrip() {
        if (document.getElementById("card_num").selectedIndex === 0) {
            alert("A Breezecard must be selected");
            return;
        }
        document.getElementById("start_trip_btn").disabled = true;
        document.getElementById("end_trip_btn").disabled = false;
        xmlhttp = new XMLHttpRequest();
        var card_number = document.getElementById("card_num").options[document.getElementById("card_num").selectedIndex].text;
        var start_trip = document.getElementById("start_trip").options[document.getElementById("start_trip").selectedIndex].text;
        var end_trip = document.getElementById("end_trip").options[document.getElementById("end_trip").selectedIndex].text;
        xmlhttp.open("GET", "balance_query.php?card="+ card_number + "&start=" +start_trip + "&end=" + end_trip,false);
        xmlhttp.onreadystatechange=function() {
            alert(this.responseText);
        };
        xmlhttp.send();
    }
    function endTrip() {
        document.getElementById("start_trip_btn").disabled = false;
        document.getElementById("end_trip_btn").disabled = true;
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
            <input type="button" id="manage_cards_btn"  value="Manage Cards" onclick="location.href='trip_history.php'">
        </p>
        <p>
            <label>Balance</label>
            <label id="card_value">
            </label>
        </p>
        <p>
            <label>Start At</label>
            <select id="start_trip">
                <?php
                $query = "SELECT Name, EnterFare FROM Station";
                $sql = mysqli_query($connection, $query);
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"owner1\">" . $row['Name'] . "</option>";
                }
                ?>
            </select>
            <input type="button" id="start_trip_btn"  value="Start Trip" onclick="startTrip()">
        </p>
        <p>
            <label>End At</label>
            <select id="end_trip">
                <?php
                $query = "SELECT Name, EnterFare FROM Station";
                $sql = mysqli_query($connection, $query);
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"owner1\">" . $row['Name'] . "</option>";
                }
                ?>
            </select>
            <input type="button" id="end_trip_btn"  value="End Trip" onclick="endTrip()" disabled="true">
        </p>
        <p>
            <input type="button" id="trip_history_btn"  value="View Trip History" onclick="location.href='trip_history.php'">
            <input type="button" id="logout_btn" value="Log Out" onclick="location.href='login_form.php'">
        </p>

</div>
</body>
</html>