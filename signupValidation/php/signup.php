<?php

session_start();

include_once('./connection.php');

// if(isset($_POST['submit'])){

    
    $Email = mysqli_real_escape_string($conn,$_POST['Email']);
    $Password_ver = mysqli_real_escape_string($conn,$_POST['Password_ver']);
    $Password_mat = mysqli_real_escape_string($conn,$_POST['Password_mat']);

    if(!empty($Email) && !empty($Password_ver) && !empty($Password_mat)){

        if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT email FROM `user-registers` WHERE email = '{$Email}'");

            if(mysqli_num_rows($sql) > 0){
                echo "$Email- This email already exist!";
            }else {

                if(isset($_FILES['img'])){
                    $img_name = $_FILES['img']['name'];
                    $img_TmpName = $_FILES['img']['tmp_name'];
                    $img_Type = $_FILES['img']['type'];


                    $imgExtenion = explode('.', $img_name);
                    $Allowed = strtolower(end($imgExtenion));

                    $Extenion = array('jpg', 'jpeg','png');

                    if(in_array($Allowed, $Extenion) === true){
                        $time = time(); ////return current time

                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($img_TmpName, 'UploadedImages/'.$new_img_name)){
                            $status = "Active";
                            $random = rand(time(), 10000);

                            $sql1 = "INSERT INTO `user-registers`(unique_id, email, passwordVerify, passwordMatch, img, status) 
                            VALUES('{$random}','{$Email}', '{$Password_ver}', '{$Password_mat}','{$new_img_name}','${status}')";
                            
                            if($sql1){
                                mysqli_query($conn,$sql1);
                                echo 'Success';
                            }else {
                                echo 'Somthing Went wrong';
                            }
                        }
                    }else {
                        echo 'You cannot Upload this Type of image';
                    }
                }else {
                    echo 'Please Select an Image File';
                }
                if($Password_ver !== $Password_mat){
                    echo ' NotMatching';
                // }else {
                //     // $sql1 = "INSERT INTO `user-registers`(unique_id, email, passwordVerify, passwordMatch, img, status) 
                //     // VALUES('{$random}','{$Email}', '{$Password_ver}', '{$Password_mat}','{$new_img_name}','${status}')";
                //     // if($sql1) {
                //         // $sql3 = mysqli_query($conn, "SELECT * FROM `user-registers` WHERE email = '{$Email}'");
                //         // if(mysqli_num_rows($sql3) > 0){
                //         //     $row = mysqli_fetch_assoc($sql3);
                //         //     $_SESSION['unique_id'] = $row['unique_id'];
                //             // $result = mysqli_query($conn, $sql1);
                //             // echo 'Success';
                //         // }
                        
                //     }else {
                //         echo 'Somthing Went wrong';
                //     }
                    
        
                }
    
            }
        }
        
    }else {
        echo 'Invalid Inputs Enter Some Data';
    }



?>
