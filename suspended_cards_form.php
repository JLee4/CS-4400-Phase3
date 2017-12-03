<!DOCTYPE html>
<html>
<head>
    <title>Suspended Cards</title>

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

<table id="myTable">
    <tr>
        <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
        <th onclick="sortTable(0)">Card #</th>
        <th onclick="sortTable(1)">New Owner</th>
        <th onclick="sortTable(2)">Date Suspended</th>
        <th onclick="sortTable(3)">Previous Owner</th>
    </tr>
    <tr>
        <td>Asshole</td>
        <td>N1</td>
        <td>2.00</td>
        <td>Open</td>
    </tr>
    <tr>
        <td>Bitch</td>
        <td>N2</td>
        <td>2.50</td>
        <td>Closed</td>
    </tr>
    <tr>
        <td>Cunt</td>
        <td>N3</td>
        <td>2.50</td>
        <td>Open</td>
    </tr>
    <tr>
        <td>Dick</td>
        <td>N4</td>
        <td>1.50</td>
        <td>Closed</td>
    </tr>
    <tr>
        <td>Eggplant</td>
        <td>N5</td>
        <td>5.00</td>
        <td>Open</td>
    </tr>
</table>

<p>
    <button type="button" onclick="alert('Update')">Assign Selected Card to New Owner</button>
</p>

<p>
    <button type="button" onclick="alert('Reset')">Assign Selected Card to Previous Owner</button>
</p>

<p>
    <label>Assigning the card to an owner will unlock all accounts conflicted on the same Breeze Card.</label>
</p>

</body>
</html>
