<?php
    include './prodConn.php';

        
        $id = $_GET['delete'];
         $sql = "DELETE FROM `products` WHERE id = '$id'";
        $result = mysqli_query($conn, $sql); 

        if($result){
            echo 'sucsses';
            header("location: ../dashboard.php");
            
        }else {
            echo 'failed';
        }
            
?>