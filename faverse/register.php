<?php
    include 'connect.php';
    error_reporting(0);
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cpass']);

        if ($pass == $cpass) {
            $sql = "SELECT * FROM user WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO user (username, email, pass)
                        VALUES ('$username', '$email', '$pass')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Success To Registration')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                    header("Location: login.php");
                } else {
                    echo "<script>alert('Wrong Input, Please Fill Out Again')</script>";
                }
            } else {
                echo "<script>alert('Email Is Already Exists')</script>";
            }
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="faverse.png">
    <link rel="stylesheet" type="text/css" href="reglo.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight:850;" align="center">REGISTER</p><br>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" maxlength="30" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpass" required>
            </div>
            <div class="input-group">
            <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text" align="center">Have An Account?
                <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</body>
</html>