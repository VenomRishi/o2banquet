<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="username" id="" placeholder="Username">
    <br>
    <input type="password" name="password" id="" placeholder="Password">
    <br>
    <input type="submit" value="Submit" name="submit">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($username=='admin'&&$password=='admin'){
        header("location: ". dashboard.php);
    }
    else
        echo "Please check username and password!";
}
?>
</body>
</html>