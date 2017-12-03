<!DOCTYPE html>
<html>
<head>
    <title>Station Management</title>

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
            padding: 10px;
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

<script type="text/javascript">
    function highlight() {
        var table = document.getElementById('dataTable');
        var cells = table.getElementsByTagName('td');

        for (var i = 0; i < cells.length; i++) {
            // Take each cell
            var cell = cells[i];
            // do something on onclick event for cell
            cell.onclick = function () {
                // Get the row id where the cell exists
                var rowId = this.parentNode.rowIndex;

                var rowsNotSelected = table.getElementsByTagName('tr');
                for (var row = 0; row < rowsNotSelected.length; row++) {
                    rowsNotSelected[row].style.backgroundColor = "";
                    rowsNotSelected[row].classList.remove('selected');
                }

                var rowSelected = table.getElementsByTagName('tr')[rowId];
                rowSelected.style.backgroundColor = "lightblue";
                rowSelected.className += " selected";
            }
        }

    }

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
<p style="font-size: 20px" align="center">STATION LISTING</p>

<table id="dataTable" align="center">
    <tr bgcolor="#808080">
        <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
        <th onclick="sortTable(0)">Station Name</th>
        <th onclick="sortTable(1)">Stop ID</th>
        <th onclick="sortTable(2)">Fare</th>
        <th onclick="sortTable(3)">Status</th>
        <th onclick="sortTable(4)">Station Type</th>
        <th onclick="sortTable(5)">Nearest Intersection</th>
    </tr>
    <tr onmousemove="highlight()">
        <td>A</td>
        <td>N1</td>
        <td>2.00</td>
        <td>Open</td>
        <td>Train</td>
        <td>null</td>
    </tr>
    <tr onmousemove="highlight()">
        <td>B</td>
        <td>N2</td>
        <td>2.50</td>
        <td>Closed</td>
        <td>Train</td>
        <td>null</td>
    </tr>
    <tr onmousemove="highlight()">
        <td>C</td>
        <td>N3</td>
        <td>2.50</td>
        <td>Open</td>
        <td>Bus</td>
        <td>Dick and Dickless</td>
    </tr>
    <tr onmousemove="highlight()">
        <td>D</td>
        <td>N4</td>
        <td>1.50</td>
        <td>Closed</td>
        <td>Bus</td>
        <td>Butt and Butthead</td>
    </tr>
    <tr onmousemove="highlight()">
        <td>E</td>
        <td>N5</td>
        <td>5.00</td>
        <td>Open</td>
        <td>Train</td>
        <td>null</td>
    </tr>
</table>

<p></p>
<div align="center">

    <button type="button1" onclick="createNewStation()" >Create New Station</button>
</div>
<p></p>
<div align="center">
    <button type="button2"  onclick="viewStation()">View Station</button>
</div>

</body>
</html>
