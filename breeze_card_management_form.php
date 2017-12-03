<!DOCTYPE html>
<html>
<head>
    <title>Manage Cards</title>

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


<p><strong>Breeze Cards</strong></p>
<p>Search/Filter</p>

<p>
    <label>Owner</label>
    <input type="password" id="password" name="password">
    <input type="checkbox">Show Suspended Cards<br>
</p>
<p>
    <label>Card Number</label>
    <input type="password" id="password" name="password">
    <button type="button" onclick="alert('Update')">Reset</button>
</p>
<p>
    <label>Value between</label>
    <input type="password" id="password" name="password">
    <label>and</label>
    <input type="password" id="password" name="password">
    <button type="button" onclick="alert('Update')">Update Filter</button>
</p>

<table id="myTable">
    <tr>
        <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
        <th onclick="sortTable(0)">Card Number</th>
        <th onclick="sortTable(1)">Value</th>
        <th onclick="sortTable(2)">Owner</th>
    </tr>
    <tr>
        <td>Asshole</td>
        <td>N1</td>
        <td>2.00</td>
    </tr>
    <tr>
        <td>Bitch</td>
        <td>N2</td>
        <td>2.50</td>
    </tr>
    <tr>
        <td>Cunt</td>
        <td>N3</td>
        <td>2.50</td>
    </tr>
    <tr>
        <td>Dick</td>
        <td>N4</td>
        <td>1.50</td>
    </tr>
    <tr>
        <td>Eggplant</td>
        <td>N5</td>
        <td>5.00</td>
    </tr>
</table>

<p>
    <input type="password" id="password" name="password">
    <button type="button" onclick="alert('Update')">Set Value of Selected Card</button>
</p>
<p>
    <input type="password" id="password" name="password">
    <button type="button" onclick="alert('Update')">Transfer Selected Card</button>
</p>

</body>
</html>
