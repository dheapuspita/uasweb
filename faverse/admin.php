<?php
error_reporting(0);
include 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="faverse.png">
    <title>Admin</title>
</head>
<body class="home">
    <div class="sidebar">
        <p><b>Faverse</b></p>
        <a class="active" href="admin.php"><i class="material-icons">home</i>Home</a>
        <a href="manage.php"><i class="material-icons">edit</i>Manage Stuff</a>
        <a href="userlist.php"><i class="material-icons">group</i>User</a>
        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
      </div>
    <footer>
        <p>Copyright &copy; 2022 Faverse. All right reserved</p>
    </footer>
</body>
</html>