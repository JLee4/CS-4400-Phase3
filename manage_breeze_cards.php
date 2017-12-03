<?php
include 'db_connection.php';
$card = $_GET['card'];
$remove = $_GET['remove'];
$value = $_GET['value'];
$card_val = $_GET['val_card'];
$user = $_SESSION['Username'];

if ($card) {
    mysqli_query($connection, "INSERT INTO Breezecard (BreezecardNum, Value, BelongsTo) VALUES ('$card', 0.00, '$user')");
}

if ($remove) {
    echo $remove;
    mysqli_query($connection, "UPDATE Breezecard SET BelongsTo = NULL WHERE BreezecardNum = '$remove'");
}

if ($value) {
    $value_result = mysqli_query($connection, "SELECT Value FROM Breezecard WHERE BreezecardNum = '$card_val'");
    $value = $value_result->fetch_row()[0] + $value;
    mysqli_query($connection, "UPDATE Breezecard SET Value = '$value' WHERE BreezecardNum = '$card_val'");
}
exit();
?>
