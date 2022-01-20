<?php

    // session_start();
    include_once './connection.php';

    $email = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $pass = mysqli_real_escape_string($conn, $_POST['loginPassword']);


    
    if(!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM `user-registers` WHERE email = '{$email}' AND passwordVerify = '{$pass}'");
        if(mysqli_num_rows($sql)> 0){
            $rows = mysqli_fetch_assoc($sql);
            if($rows){
                // echo "<br>Success";
                if($email === 'admin@admin.com'){
                    echo 'admin';
                    echo '';
                }else {
                    echo 'Success';
                }
            }

        }else {
            echo 'incorrect Email or password';    
        }
        
    }else {
        echo 'All Input field required';
    }
    


?>