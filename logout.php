<?php
    session_start();
    include './signupValidation/php/connection.php';
    
    $query = mysqli_query($conn,"SELECT * FROM `employee`");
    $getId = mysqli_fetch_array($query);
    
    $id = $getId['id'];
    if(isset($_SESSION['id'])){

        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE `employee` SET status = '{$status}' WHERE id = '{$id}'");
    
        if($sql){
                session_unset();
                session_destroy();
                echo "header";
                //  header("location: /index.php");
            // echo $status;
        }
    }
    // }
    //  if(isset($_SESSION['email'])){
        //      $sql = "UPDATE `employee` SET status = '{$}'"
        
        // }
   

        // var_dump($id);

        
        // header("location: index.php");
        //         //    if(isset(session_destroy())){
            
            //         //    }
            //         echo 'hi';
            

        // if(isset($_SESSION['id'])){
        //     $log = mysqli_real_escape_string($conn, $_GET['log']);
        //     echo $log;
        //     if(isset($log)){
        //         $status = "Offline now";

        //         $sqls = mysqli_query($conn, "UPDATE `employee` SET status = '{$status}' WHERE id = '{$log}'");

        //         if($sqls){
        //             session_unset();
        //             session_destroy();
        //             // header("location: /index.php");
        //         }
        //     }
        // }
        
?>