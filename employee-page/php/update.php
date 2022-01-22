<?php

    include './prodConn.php';

    // echo 'hi';

    // $update = $_POST['id'];
    // $sql = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$update'");

    // // $res = mysqli_fetch_row($sql);
    // // $productN = $res[1];
    // // $productId = $res[2];
    // // $productPrice = $res[3];
    // // var_dump($res[0]);
    // echo $update;
    $query = mysqli_query($conn,"SELECT * FROM products");
    $row = mysqli_fetch_array($query);
    // echo $row['id'];
    // if($row['id']){
        $id = $row['id'];
        $UpdateName  = mysqli_real_escape_string($conn, $_POST['UpdateName']);
        $UpdateId  = mysqli_real_escape_string($conn, $_POST['UpdateId']);
        $UpdatePrice  = mysqli_real_escape_string($conn, $_POST['UpdatePrice']);
        echo $id,$UpdateName;

        if(!empty($UpdateName) && !empty($UpdateId) && !empty($UpdatePrice)){

        }else {
            echo 'fileds Requeired';
        }

        $query = "UPDATE `products` set product_name = '$UpdateName', product_unique_id = '$UpdateId', product_price = '$UpdatePrice'
            WHERE id = '$id'
        ";
        $result = mysqli_query($conn, $query);
        if($result){
            echo 'Updated';
        }
    // }
?>