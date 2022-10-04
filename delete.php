<?php
    include "config.php";

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];

        $sql_delete = "DELETE FROM products where id = '$product_id'";

        $result = $conn->query($sql_delete);

        if($result){
            header('Location: products.php');
        }
    }