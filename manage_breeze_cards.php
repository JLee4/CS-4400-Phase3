<?php
include 'db_connection.php';

if (!empty($_GET['card'])) {
    $card = $_GET['card'];
    $user = $_GET['user'];
    mysqli_query($connection, "INSERT INTO Breezecard (BreezecardNum, Value, BelongsTo) VALUES ('$card', 0.00, '$user')");
}

if (!empty($_GET['remove'])) {
    $remove = $_GET['remove'];
    mysqli_query($connection, "UPDATE Breezecard SET BelongsTo = NULL WHERE BreezecardNum = '$remove'");
}

if (!empty($_GET['value'])) {
    $value = $_GET['value'];
    $card_val = $_GET['val_card'];
    $value_result = mysqli_query($connection, "SELECT Value FROM Breezecard WHERE BreezecardNum = '$card_val'");
    $value = $value_result->fetch_row()[0] + $value;
    mysqli_query($connection, "UPDATE Breezecard SET Value = '$value' WHERE BreezecardNum = '$card_val'");
}
exit();
?>
