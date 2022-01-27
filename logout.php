<?php
    session_start();
    include './signupValidation/php/connection.php';
   
        $id = $_SESSION['id'];
        
        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE `employee` SET status = '{$status}' WHERE id = '{$id}'");

        if($sql){
            session_unset();
            session_destroy();
            echo "header";
               
        }
    
    
        
?>