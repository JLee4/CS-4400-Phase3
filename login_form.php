<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
    function login() {
        var val = document.form.getElementById("username").value;
        if (val || document.elements["password"].value) {
            document.elements["username"].value = "pejiosfejaoesj";
            alert("Field(s) are empty!");
        }
        document.form.action="login.php";
        document.form.submit();
    }
</script>
<body>
<div id="window">
    <form name="form" method="POST">
        <p>
            <label>Username</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label>Password</label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <input type="button" id="login"  value="Login" onclick="login()">
            <input type="button" id="register" value="Register" onclick="location.href='register_form.php'">
        </p>

</div>
</body>
</html>
