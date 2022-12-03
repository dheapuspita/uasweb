<?php 
include 'connect.php';
$id = $_GET['id'];
$query = "DELETE FROM stuff WHERE id='$id'";
$result = mysqli_query($connection, $query);
 
if(!$result) {
    die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
}else{
    echo "<script>alert('Succesfully Deleted !');window.location='manage.php';</script>";  
}     
?>