<?php
    include 'connect.php';
    session_start();
    error_reporting(0);

    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);

        $sql = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: index.html");
        } elseif ($username=='admin1' AND $pass=='adminhere') {
            header("Location: admin.php");
        }
        else {
            echo "
            <script>
            alert('Email Or Password Is Wrong')
            window.location.href='login.php';
            </script>";
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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight:850;" align="center">LOGIN</p><br>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
            <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text" align="center">Don't Have An Account?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</body>
</html>