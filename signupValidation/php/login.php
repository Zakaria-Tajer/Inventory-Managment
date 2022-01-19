<?php
    include_once './connection.php';
    $loginEmail = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $loginPassword = mysqli_real_escape_string($conn, $_POST['loginPassword']);

    
    if(!empty($loginEmail) && !empty($loginPassword) ){
        echo 'please fill the blank';
    
            $sql = mysqli_query($conn, "SELECT * FROM `user-register` WHERE email = '${loginEmail}' AND password = '{$loginPassword}'");
    
            if(mysqli_num_rows($sql)){
                $rows = mysqli_fetch_assoc($sql);
                echo 'succes';
                header("location: /admin-pages/dashboard.php");
            }else {
                echo 'inl';
            }
        
    }
    


?>