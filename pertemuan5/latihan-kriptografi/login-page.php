<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-Ua-Compatible" content="Ie=edge" />
        <meta name="viewport" content="width=device-width", initial-scale=1.0 />
        <title>Login Page</title>
</head>
<body>
    <!-- pastikan action menuju ke auth.php dan method POST/post -->
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" />
        <br />
        <label for="password">Password</label>
        <input name="password" type="password" />
        <br />
        <input type="submit" name="submit" value="Login">
        <a href="register.php">Register</a>
</form>
</body>
</html>