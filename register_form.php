<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
    function register() {
        document.form.action="register.php";
        document.form.submit();
    }
</script>
<body>
<div id="window">
    <form name="form" method="POST">
        <p>
            <label>Register</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label>Password</label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <input type="button" id="register" value="Register" onclick="register()">
        </p>

</div>
</body>
</html>
