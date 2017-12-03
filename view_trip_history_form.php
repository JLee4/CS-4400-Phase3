<!DOCTYPE html>
<html>
<head>
    <title>Trip History</title>

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

<p>
    <label>Start Time</label>
    <input type="text" id="username" name="username">
</p>
<p>
    <label>End Time</label>
    <input type="password" id="password" name="password">
</p>

<button type="button" onclick="alert('Update')">Update</button>
<button type="button" onclick="alert('Reset')">Reset</button>

<table id="myTable">
    <tr>
        <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
        <th onclick="sortTable(0)">Time</th>
        <th onclick="sortTable(1)">Source</th>
        <th onclick="sortTable(2)">Destination</th>
        <th onclick="sortTable(3)">Fare Paid</th>
        <th onclick="sortTable(4)">Card #</th>
    </tr>
    <tr>
        <td>Asshole</td>
        <td>N1</td>
        <td>2.00</td>
        <td>Open</td>
        <td>Train</td>
    </tr>
    <tr>
        <td>Bitch</td>
        <td>N2</td>
        <td>2.50</td>
        <td>Closed</td>
        <td>Train</td>
    </tr>
    <tr>
        <td>Cunt</td>
        <td>N3</td>
        <td>2.50</td>
        <td>Open</td>
        <td>Bus</td>
    </tr>
    <tr>
        <td>Dick</td>
        <td>N4</td>
        <td>1.50</td>
        <td>Closed</td>
        <td>Bus</td>
    </tr>
    <tr>
        <td>Eggplant</td>
        <td>N5</td>
        <td>5.00</td>
        <td>Open</td>
        <td>Train</td>
    </tr>
</table>


</body>
</html>
