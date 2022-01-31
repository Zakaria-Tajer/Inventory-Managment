<?php


    session_start();
    include './EmpConn.php';
    $message = $_POST['message'];
    $id = $_SESSION['unique_id'];
    
    $emp = $_COOKIE['profileid'];


    $date = date('Y-m-d');
    $sql = "INSERT INTO `msg`(sending_msg_id, reciving_msg_id ,msg ,amin_key) VALUES('{$id}','{$emp}','{$message}','{$id}')";
    
    $query = mysqli_query($conn, $sql);

    
    

    if($query){
        
        echo 'good';
    }else {
        echo 'bad';
    }


?>