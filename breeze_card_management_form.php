<!DOCTYPE html>
<html>
<head>
    <title>Manage Cards</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        #window {
            width:50%;
        }

        table {
            border-spacing: 0;
            width: 100%;
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

<script type="text/javascript">
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("dataTable");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount ++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>

<body>
<p style="font-size: 20px" align="center">BREEZE CARD MANAGEMENT - ADMIN</p>

<div id="window">
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

    <table id="dataTable">
        <tr bgcolor="808080">
            <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
            <th onclick="sortTable(0)">Card Number</th>
            <th onclick="sortTable(1)">Value</th>
            <th onclick="sortTable(2)">Owner</th>
        </tr>
        <tr>
            <td>A</td>
            <td>N1</td>
            <td>2.00</td>
        </tr>
        <tr>
            <td>B</td>
            <td>N2</td>
            <td>2.50</td>
        </tr>
        <tr>
            <td>C</td>
            <td>N3</td>
            <td>2.50</td>
        </tr>
        <tr>
            <td>D</td>
            <td>N4</td>
            <td>1.50</td>
        </tr>
        <tr>
            <td>E</td>
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
</div>

</body>
</html>
