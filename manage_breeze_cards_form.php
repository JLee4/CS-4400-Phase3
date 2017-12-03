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
<script type="text/javascript">
    function add_card() {
        xmlhttp = new XMLHttpRequest();
        var card_number = document.getElementById("card_num").value;
        xmlhttp.open("GET", "manage_breeze_cards.php?card="+card_number+"&user="+<?php echo $_SESSION['Username']?>,false);
        xmlhttp.send();
        location.reload();
    }
    function remove_card(var card_num) {
        alert("fjdsoif");
        xmlhttp = new XMLHttpRequest();
        var card_number = document.getElementById(card_num).value;
        alert(card_number);
        xmlhttp.open("GET", "manage_breeze_cards.php?remove="+card_number+"&user="+<?php echo $_SESSION['Username']?>,false);
        xmlhttp.onreadystatechange=function() {
            alert(this.responseText);
        };
        xmlhttp.send();
        location.reload();
    }
    function add_value() {
        xmlhttp = new XMLHttpRequest();
        var value = document.getElementById("value").value;
        xmlhttp.open("GET", "manage_breeze_cards.php?value="+value+"&val_card="+card_number+"&user="+<?php echo $_SESSION['Username']?>,false);
        xmlhttp.send();
        location.reload()
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


<p><strong>Breeze Cards</strong></p>

<table id="myTable">
    <tr>
        <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
        <th onclick="sortTable(0)">Card Number</th>
        <th onclick="sortTable(1)">Value</th>
    </tr>
    <?php
    include 'db_connection.php';
    $user = 'sandrapatel';
    $query = "SELECT BreezecardNum, Value FROM Breezecard WHERE BelongsTo = '$user'";
    $sql = mysqli_query($connection, $query);
    while ($row = $sql->fetch_assoc()){
        echo "<tr><td>". $row['BreezecardNum'] ."</td><td>". $row['Value']."</td><td><input type='button' onclick='remove_card(".$row['BreezecardNum'].")' value='Remove'></td></tr>";
    }
    ?>
</table>

<p>
    <input type="text" id="card_num" name="card_num">
    <button type="button" onclick="add_card()">Add Card</button>
</p>

<p><strong>Add Value to Selected Card</strong></p>
<p>
    <label>Credit Card #</label>
    <input type="text" id="credit" name="credit">
</p>
<p>
    <label>Value</label>
    <input type="text" id="value" name="value">
</p>
<p>
<button type="button" onclick="add_value()">Add Value</button>
</p>

</body>
</html>
