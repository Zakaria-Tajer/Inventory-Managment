<?php
    session_start();
    include_once './connection.php';


    $unique_id = $_SESSION['unique_id'];
    // echo $unique_id;
    $status = "Offline now";
    $sql2 = mysqli_query($conn, "UPDATE `user-registers` SET status = '{$status}' WHERE unique_id = '{$unique_id}'");

    if($sql2){
        session_unset();
        session_destroy();
        echo "redirectAdmin";

    }




?>