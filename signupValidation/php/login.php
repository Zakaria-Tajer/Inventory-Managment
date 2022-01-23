<?php

    session_start();
    include_once './connection.php';

    $email = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $pass = mysqli_real_escape_string($conn, $_POST['loginPassword']);


    
    if(!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM `user-registers` WHERE email = '{$email}' AND passwordVerify = '{$pass}'");
        if(mysqli_num_rows($sql)> 0){
            $rows = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $rows['unique_id'];
            if($rows['unique_id']=='333116377'){
                echo 'admin';
            }else {
                echo 'Success';

                } 

        }else {
            echo 'incorrect Email or password';    
        }
        
    }else {
        echo 'All Input field required';
    }
    


?>