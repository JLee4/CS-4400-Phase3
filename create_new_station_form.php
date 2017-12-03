<!DOCTYPE html>
<html>
<head>
    <title>Create New Station</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        table {
            border-spacing: 0;
            width: 50%;
            border: 1px solid #ddd;
        }

        th {
            cursor: pointer;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        button {
            background-color: #a0a0a0;
            border: 1px solid black;
            color: black;
            padding: 8px 16px;
            text-align: center;
            font-size: 16px;
            font-family: "Times New Roman";
        }
    </style>
</head>

<body>
<p style="font-size: 20px" align="center">CREATE NEW STATION</p>

<div id="window">
    <form name="form" method="POST">
        <p>
            <label>Station Name</label>
            <input type="text" id="station_name" name="Station_Name">
        </p>
        <p>
            <label>Stop ID</label>
            <input type="text" id="stop_ID" name="Stop_ID">
        </p>
        <p>
            <label>Entry Fare</label>
            <input type="number" id="entry_fare" name="Entry_Fare">
        </p>

        <div>
            <h4>Station Type</h4>
            <input type="radio" name="breeze_radio" id="old_breeze_radio" value="old">Bus Station<br>
            <p>
                <label style="font-size: 12px">Nearest Intersection<br></label>
                <input type="text" id="card_num" name="card_num">
            </p>
            <input type="radio" name="breeze_radio" id="new_breeze_radio" value="new">Train Station<br>
        </div>

        <p style="font-size: 50px"></p>
        <div>
            <input type="checkbox" id="openStation">
            <label for="openStation">Open Station</label>
            <p style="font-size: 12px">When checked, passengers can enter at this station.</p>
        </div>

        <p>
            <input type="button" id="register" value="Create Station" onclick="registerFunc()">
        </p>

    </form>
</div>

</body>
</html>
