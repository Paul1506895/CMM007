<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"/> <br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />
        <input type="submit" name="submit" value = "login"/>
    </form>

</div>
</body>
</html>
