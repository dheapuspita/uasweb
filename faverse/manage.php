
<?php
include 'connect.php';
$result = mysqli_query($connection, "SELECT * FROM stuff");

$data_stuff = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_stuff[] = $row;
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
    <link rel="stylesheet" href="css/table.css">
    <title>Admin</title>
</head>
<body>
    <div class="sidebar">
        <p><b>Faverse</b></p>
        <a href="admin.php"><i class="material-icons">home</i>Home</a>
        <a class="active" href="manage.php"><i class="material-icons">edit</i>Manage Stuff</a>
        <a href="userlist.php"><i class="material-icons">group</i>User</a>
        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
     </div>
    <div class="content">
        <h1>Manage Stuff</h1>
        <div style="overflow-x: auto;">
  <table>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Price </th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php $i = 1; foreach ($data_stuff as $d):?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo htmlspecialchars($d['names']);?></td>
        <td><?php echo htmlspecialchars($d['price']);?></td>
        <td><img style="width: 40px;" src="pict/<?php echo $d['pict']; ?>"></td>
        <td>
            <button><i class="material-icons"><a href="delete.php?id=<?php echo $d["id"]; ?>" onclick = "return confirm('Sure to delete this stuff?')">Delete</a></i></button>
            <button><i class="material-icons"><a href="update.php?id=<?php echo $d["id"]; ?>" >Edit</a></i></button>
        </td>
    </tr>
    <?php $i++; endforeach;?>
  </table>
  <br>
  <p>Add Stuff</p>
  <button><i class="material-icons"><a href="add.php">Add</a></i></button>
  </div>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Faverse. All right reserved</p>
    </footer>
</body>
</html>