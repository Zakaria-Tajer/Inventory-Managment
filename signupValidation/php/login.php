<?php

    session_start();
    include_once './connection.php';

    $email = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $pass = mysqli_real_escape_string($conn, $_POST['loginPassword']);


    
    if(!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM `employee` WHERE email = '{$email}' AND password = '{$pass}'");
        if(mysqli_num_rows($sql)> 0){
            $rows = mysqli_fetch_assoc($sql);
            // echo $rows['id'];
            $status = "Active Now";
            $sql3 = mysqli_query($conn,"UPDATE `employee` set status = '{$status}' WHERE id = '{$rows['id']}'");
            if($sql3){
                $_SESSION['id'] = $rows['id'];
                $_SESSION['fname'] = $rows['fname'];
                $_SESSION['lname'] = $rows['lname'];
                $_SESSION['img'] = $rows['img'];
                echo 'Success';
            }
            // $id = $rows['id'];
            
            // mysqli_query($conn, $sql3);

        }else {
            // echo 'incorrect Email or password';    
        }
        $sqlOther = mysqli_query($conn, "SELECT * FROM `userregisters` WHERE email = '{$email}' AND passwordVerify = '{$pass}'");
        if(mysqli_num_rows($sqlOther)> 0){
            $admin = mysqli_fetch_assoc($sqlOther);

            $statusAdmin = "Active Now";
            $sql4 = mysqli_query($conn,"UPDATE `userregisters` set status = '{$statusAdmin}' WHERE id = '{$admin['id']}'");
            if($sql4){
                $_SESSION['unique_id'] = $admin['unique_id'];
                $_SESSION['fname'] = $admin['fname'];
                // $_SESSION['lname'] = $ad['lname'];
                $_SESSION['img'] = $admin['img'];
                echo 'admin';
            }
        }else {
            // echo 'incorrect Email or password';
        }
     

        
        
    }else {
        echo 'All Input field required';
    }
    


?>