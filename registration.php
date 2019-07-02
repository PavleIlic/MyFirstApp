<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "authentication");
if (isset($_POST['register_bnt'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $password2 = mysqli_real_escape_string($db,$_POST['password2']);

    if ($password == $password2) {
        $password = md5($password);
        $sql = "INSERT INTO  users (`username`, `email`, `password`) VALUES ('$username','$email','$password')";
        mysqli_query($db,$sql);
        $_SESSION['message'] = "Uspesno ste se registrovali!";
        $_SESSION['username'] = $username;
        header("Location: login.php");
    } else {
        $_SESSION['message'] = "Sifre se ne podudaraju!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracija</title>
</head>
<body>
    <div class="header">
    <h1>Registracija</h1>
    </div>

    <form method="post" action="registration.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="textInput"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>
            <tr>
                <td>Confirm password:</td>
                <td><input type="password" name="password2" class="textInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="register_bnt" Value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>