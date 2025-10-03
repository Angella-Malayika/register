<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="form">
        
        <form name="form"action="login.php" method="POST">
            <h1>
            Login Form
        </h1>
            <label>Username: </label><br>
            <input type="text" id="user" name="user"><br><br>
            <label>Email: </label><br>
            <input type="Email" id="email" name="email"><br><br>
            <label>Password: </label><br>
            <input type="password" id="word" name="word"><br><br>
            <input type="Submit" id="btn" value="Login" name="submit" />
        </form>
    </div>
</body>

</html>