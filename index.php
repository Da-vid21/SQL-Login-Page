<?php
include 'config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form method="POST" action="#">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="text" name="password" placeholder="Enter Password">
        <input type="submit" name="signup">
    </form>
    <form method="POST" action="#">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="text" name="password" placeholder="Enter Password">
        <input type="submit" name="signin" value="Sign in">
    </form>
</body>
</html>