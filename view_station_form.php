<!DOCTYPE html>
<html>
<head>
    <title>View Station</title>
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
    </style>
</head>

<body>
<p style="font-size: 20px" align="center">STATION DETAIL - XXX</p>

<div id="window">
    <p><strong>North Springs</strong> (Stop N11)</p>


    <p>
        <label>Fare</label>
        <input type="text" id="fare">
        <button type="button" onclick="alert('Update')">Update Fare</button>

    </p>
    <p>
        <label>Nearest Intersection</label>
        <input type="text" id="nearest">
    </p>
    <br>
    <p>
        <input type="checkbox">Open Station<br>
    </p>

    <p>
        <label style="font-size: 12px;"> When checked, passengers can enter at this station.</label>
    </p>
</div>

</body>
</html>
