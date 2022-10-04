<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    
    if(!$conn){
        die(mysqli_error($conn));
    }
    
    $sql_create_db = "CREATE DATABASE eCommerce";
    $result = $conn->query($sql_create_db);

    if($result === TRUE){
        echo "Database created succesfully";
    }else{
        echo "Error :" . $conn->error;
    }
    $conn->close();
?>
