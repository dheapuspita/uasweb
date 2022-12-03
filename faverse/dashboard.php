<?php
include 'connect.php';
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
<body>
    <div class="sidebar">
        <p><b>Faverse</b></p>
        <a href="admin.php"><i class="material-icons">home</i>Home</a>
        <a href="manage.php"><i class="material-icons">edit</i>Manage Stuff</a>
        <a href="userlist.php"><i class="material-icons">group</i>User</a>
        <a class="active" href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
      </div>
    <div class="content">
        <br>
        <br>
        <div class="boxes">
            <div class="box box1">
                <i class="material-icons">palette</i>
                <span class="text">Total Stuff</span>
                <span class="number">
                    <?php
                    $dash_stuff_query = "SELECT * FROM stuff";
                    $dash_stuff_query_run = mysqli_query($connection,$dash_stuff_query);
                    if($stuff_total = mysqli_num_rows($dash_stuff_query_run)){
                        echo $stuff_total;
                    }
                    else{
                        echo "No Data"; 
                    }
                    ?>
                </span>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="box box2">
                <i class="material-icons">group</i>
                <span class="text">Total User</span>
                <span class="number">
                <?php
                    $dash_user_query = "SELECT * FROM user";
                    $dash_user_query_run = mysqli_query($connection,$dash_user_query);
                    if($user_total = mysqli_num_rows($dash_user_query_run)){
                        echo $user_total;
                    }
                    else{
                        echo "No Data"; 
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Faverse. All right reserved</p>
    </footer>
</body>
</html>