<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eCommerce";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // echo "Connected to database";
    if(!$conn){
        die(mysqli_error($conn));
    }
?>    