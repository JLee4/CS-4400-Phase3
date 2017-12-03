<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
    function registerFunc() {
        if (!document.getElementById("username").value || !document.getElementById("password").value
            || !document.getElementById("email").value || !document.getElementById("password_confirm").value) {
            alert("Field(s) are empty!");
            return;
        }
        var regex = /\S+@\S+\.\S+/;
        if (!regex.test(document.getElementById("email").value)) {
            alert("Email is invalid");
            return;
        }
        if (document.getElementById("password").value.length < 8) {
            alert("Password must be at least 8 characters in length");
            return;
        }
        if (document.getElementById("password").value !== document.getElementById("password_confirm").value) {
            alert("Passwords do not match");
            return;
        }
        if (!document.getElementById("old_breeze_radio").checked && !document.getElementById("new_breeze_radio").checked) {
            alert("Please choose a BreezeCard option.");
            return;
        }
        if (document.getElementById("old_breeze_radio").checked && !document.getElementById("card_num").value) {
            alert("Please enter an existing BreezeCard");
            return;
        }
        if (document.getElementById("old_breeze_radio").checked && (/\D/.test(document.getElementById("card_num").value) || document.getElementById("card_num").value.length !== 16)) {
            alert("Please enter an valid BreezeCard number. It must be a 16 digit number");
            return;
        }
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "user_validation.php?user="+document.getElementById("username").value+"&email="+document.getElementById("email").value,false);
        xmlhttp.onreadystatechange=function() {
            if (this.responseText !== '') {
                //alert(this.responseText);
                alert("Username or email already taken.")
                document.location.href = "register_form.php"
            }
        };
        //alert("user_validation.php?user="+document.getElementById("username").value+"&email="+document.getElementById("email").value);
        xmlhttp.send();
        document.form.action="register.php";
        document.form.submit();
    }
</script>
<body>
<div id="window">
    <h1>
       Registration
    </h1>
    <form name="form" method="POST">
        <p>
            <label>Username</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label>Email</label>
            <input type="email" id="email" name="email">
        </p>
        <p>
            <label>Password</label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <label>Confirm Password</label>
            <input type="password" id="password_confirm" name="password_confirm">
        </p>
        <div>
            <h4>Breeze Card</h4>
            <input type="radio" name="breeze_radio" id="old_breeze_radio" value="old"> Use my existing Breezecard<br>
            <p>
                <label>Existing BreezeCard Number</label>
                <input type="text" id="card_num" name="card_num">
            </p>
            <input type="radio" name="breeze_radio" id="new_breeze_radio" value="new"> Get a new BreezeCard<br>
        </div>
        <p>
            <input type="button" id="register" value="Register" onclick="registerFunc()">
        </p>
</div>
</body>
</html>
