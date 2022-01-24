<?php

    include './prodConn.php';

    $query = mysqli_query($conn,"SELECT * FROM `products`");
    $row = mysqli_fetch_assoc($query);

    $id = $row['id'];

    $sql = "DELETE FROM `products` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 'good';
    }else {
        echo 'Failed';
    }


?>