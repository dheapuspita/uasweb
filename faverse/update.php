<?php 
include 'connect.php';
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $names = $_POST['names'];
    $price = $_POST['price'];
    $pict = $_FILES['pict']['name'];

    if($pict != "") {
        $ekstensi = array('jpg', 'png');
        $x = explode('.', $pict);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['pict']['tmp_name'];


        if(in_array($extension, $ekstensi) === true) {
            move_uploaded_file($file_tmp, 'pict/'.$pict);

            $query = "UPDATE stuff SET
            names = '$names',
            price = '$price',
            pict = '$pict'
            WHERE id = $id";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
            }else{
                echo "<script>alert('Succesfully Updated!');window.location='add.php';</script>";  
            }

        }else{
            echo "<script>alert('Image Must Be JPG Or PNG !');window.location='add.php';</script>";   
        }}
        else{
            $query = "UPDATE stuff SET
            names = '$names',
            price = '$price',   
            WHERE id = $id";
            $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
        }else{
            echo "<script>alert('Succesfully Updated!');window.location='manage.php';</script>";  
        }  
        
    }

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
    <link rel="stylesheet" href="css/form.css">
    <title>Admin</title>
</head>
<body>
    <div class="sidebar">
        <a href="admin.php"><i class="material-icons">home</i>Home</a>
        <a class="active"href="manage.php"><i class="material-icons">edit</i>Manage Stuff</a>
        <a href=""><i class="material-icons">group</i>User</a>
        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href=""><i class="material-icons">logout</i>Logout</a>
    </div>
    <div class="content">
        <h1>Update Stuff</h1>
        <form class="needs-validation" action="" method="post" enctype="multipart/form-data">
                <div>

                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="text" placeholder="Name" name="names" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text"  id="text" placeholder="Price" name="price" required>
                  </div>
                  
                  <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="pict" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit">
                  </div>
              </form>
    </div>
</body>
</html>