<!DOCTYPE html>
<html>
<head>
    <title>Administrator Functionality</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        #window {
            width:20%;
        }

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
<p style="font-size: 20px" align="center">ADMINISTRATOR</p>

<div id="window">
    <div align="center">
        <button type="button" onclick="location.href='station_management_form.php'">Station Management</button>
    </div>
    <p></p>
    <div align="center">
        <button type="button" onclick="location.href='suspended_cards_form.php'">Suspended Cards</button>
    </div>
    <p></p>
    <div align="center">
        <button type="button" onclick="location.href='breeze_card_management_form.php'">Breeze Card Management</button>
    </div>
    <p></p>
    <div align="center">
        <button type="button" onclick="location.href='passenger_flow_report_form.php'">Passenger Flow Report</button>
    </div>
    <p style="font-size: 50px"></p>
    <div align="center">
        <button type="button" onclick="location.href='login_form.php'">Log Out</button>
    </div>
</div>

</body>
</html>
