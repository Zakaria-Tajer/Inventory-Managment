<?php
    session_start();
    include_once './connection.php';
    $uniqe_id = $_SESSION['unique_id'];
    // echo $uniqe_id;
    $status = "Offline now";
    $sql2 = mysqli_query($conn, "UPDATE `user-registers` SET status = '{$status}' WHERE unique_id = '{$uniqe_id}'");

    if($sql2){
        session_unset();
        session_destroy();
        echo "redirectAdmin";

    }




?>