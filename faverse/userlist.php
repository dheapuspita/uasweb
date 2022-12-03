
<?php
include 'connect.php';
$result = mysqli_query($connection, "SELECT * FROM user");

$data_user = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_user[] = $row;
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
    <link rel="icon" href="Faverse.png">
    <link rel="stylesheet" href="css/table.css">
    <title>Admin</title>
</head>
<body>

    <div class="sidebar">
        <p><b>Max Ackermann</b></p>
        <a href="admin.php"><i class="material-icons">home</i>Home</a>
        <a href="manage.php"><i class="material-icons">edit</i>Manage Stuff</a>
        <a class="active" href="userlist.php"><i class="material-icons">group</i>User</a>
        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
     </div>
    <div class="content">
        <h1>User</h1>
        <div style="overflow-x: auto;">
  <table>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php $i = 1; foreach ($data_user as $d):?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo htmlspecialchars($d['username']);?></td>
        <td><?php echo htmlspecialchars($d['email']);?></td>
    </tr>
    <?php $i++; endforeach;?>
  </table>
  </div>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Faverse. All right reserved</p>
    </footer>

</body>
</html>