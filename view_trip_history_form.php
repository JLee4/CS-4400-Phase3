<!DOCTYPE html>
<html>
<head>
    <title>Trip History</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        #window {
            width: 50%;
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
            padding: 10px;
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
<p style="font-size: 20px" align="center">TRIP HISTORY</p>

<div id="window">
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
    <br><br><br>

    <table id="dataTable" align="center">
        <tr bgcolor="808080">
            <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
            <th onclick="sortTable(0)">Time</th>
            <th onclick="sortTable(1)">Source</th>
            <th onclick="sortTable(2)">Destination</th>
            <th onclick="sortTable(3)">Fare Paid</th>
            <th onclick="sortTable(4)">Card #</th>
        </tr>
        <tr>
            <td>A</td>
            <td>N1</td>
            <td>2.00</td>
            <td>Open</td>
            <td>Train</td>
        </tr>
        <tr>
            <td>B</td>
            <td>N2</td>
            <td>2.50</td>
            <td>Closed</td>
            <td>Train</td>
        </tr>
        <tr>
            <td>C</td>
            <td>N3</td>
            <td>2.50</td>
            <td>Open</td>
            <td>Bus</td>
        </tr>
        <tr>
            <td>D</td>
            <td>N4</td>
            <td>1.50</td>
            <td>Closed</td>
            <td>Bus</td>
        </tr>
        <tr>
            <td>E</td>
            <td>N5</td>
            <td>5.00</td>
            <td>Open</td>
            <td>Train</td>
        </tr>
    </table>
</div>


</body>
</html>
