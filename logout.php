<?php
    session_start();
    include './signupValidation/php/connection.php';
    
    // $query = mysqli_query($conn, "SELECT * FROM `employee`");
    // $row = mysqli_fetch_assoc($query);
    
        $id = $_SESSION['id'];
    // echo $id;

        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE `employee` SET status = '{$status}' WHERE id = '{$id}'");
    
        if($sql){
            session_unset();
            session_destroy();
            echo "header";
               
        }
    
        
?>