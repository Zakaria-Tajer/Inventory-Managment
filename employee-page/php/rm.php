<?php

    include './prodConn.php';

    if(!is_file('clicks.txt')){
        file_put_contents('clicks.txt', 0);
    }
    $count = file_get_contents('clicks.txt');
    file_put_contents('clicks.txt', ++$count);
    
    $query = mysqli_query($conn,"SELECT * FROM `produc`");
    $row = mysqli_fetch_assoc($query);

    $id = $_GET['delete'];
    // echo $id;

    $sql = "DELETE FROM `produc` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 'good';
        header("location: ../dashboard.php");
    }else {
        echo 'Failed';
    }



?>