<?php
    include './prodConn.php';

    
    // if(mysqli_query($conn, $sql)){
        //     echo 'suscces';
        // }
        // echo 'h';
        
        $id = $_GET['delete'];
        // $sql = "DELETE FROM `products` WHERE id='$_GET[id]'";
        $sql = "DELETE FROM `products` WHERE id = '$id'";
        $result = mysqli_query($conn, $sql); 

        if($result){
            echo 'sucsses';
            header("location: ../dashboard.php");
            
        }else {
            echo 'failed';
        }


        if(isset($_POST['update-btn'])){
            echo 'j';
        }
?>