<?php

    include './prodConn.php';
    session_start();
    $query = mysqli_query($conn,"SELECT * FROM produc");
    $row = mysqli_fetch_array($query);

    $id = $row['id'];
    // $id = $_SESSION['id'];
    $UpdateName  = mysqli_real_escape_string($conn, $_POST['UpdateName']);
    $UpdateId  = mysqli_real_escape_string($conn, $_POST['UpdateId']);
    $UpdatePrice  = mysqli_real_escape_string($conn, $_POST['UpdatePrice']);

    if(!empty($UpdateName) && !empty($UpdateId) && !empty($UpdatePrice)){
        $query = "UPDATE `produc` set product_name = '$UpdateName', product_unique_id = '$UpdateId', product_price = '$UpdatePrice'
            WHERE id = '$id'
        ";
        $result = mysqli_query($conn, $query);
        if($result){
            echo 'Updated';
        }

    }else {
        echo 'fileds Requeired';
    }

    // }
?>