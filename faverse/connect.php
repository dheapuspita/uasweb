<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_faverse";

    $conn = mysqli_connect($server, $user, $pass, $database);
    if(!$conn){
        die("Failed Connected To Database");
    }
?>