<?php

    session_start();
    include './prodConn.php';

    $id = $_SESSION['id'];


    $sql = "SELECT * FROM `msg`";

    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);

    $msgSender = $row['sending_msg_id'];
    $msgReciver = $row['reciving_msg_id'];



    $msg = '';

    $sql2 = "SELECT * FROM `msg` WHERE sending_msg_id = '{$msgSender}' AND reciving_msg_id = '{$id}'";

    $query2 = mysqli_query($conn, $sql2);

    

    
    

    if(mysqli_num_rows($query2) > 0){
        while($rows = mysqli_fetch_assoc($query2)){
            $msg .= '
                <h2>'.$rows['msg'].'</h2>
            ';
        }
        echo $msg;
    }










?>