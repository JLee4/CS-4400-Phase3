<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
    function loginFunc() {
        if (!document.getElementById("username").value || !document.getElementById("password").value) {
            alert("Field(s) are empty!");
            return;
        }
        document.form.action="login.php";
        document.form.submit();
    }
</script>
<body>
<div id="window">
    <form name="form" method="POST">
        <p>
            <label>admiiiiiiiiiiiiiiiin</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label>Password</label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <input type="button" id="login"  value="Login" onclick="loginFunc()">
            <input type="button" id="register" value="Register" onclick="location.href='register_form.php'">
        </p>

</div>
</body>
</html>