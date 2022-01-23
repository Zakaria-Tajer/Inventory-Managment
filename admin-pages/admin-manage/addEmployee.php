<?php
   
    include('../connection.php');
    
    $fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordVerification = mysqli_real_escape_string($conn, $_POST['passwordVerification']);
    
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($passwordVerification)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            $sql = mysqli_query($conn, "SELECT email FROM `employee` WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo 'Email Alredy Exist';
            }else {
                if(isset($_FILES['img'])){
                    $img_name = $_FILES['img']['name'];
                    $img_TmpName = $_FILES['img']['tmp_name'];
                    $img_Type = $_FILES['img']['type'];
    
    
                    $imgExtenion = explode('.', $img_name);
                    $Allowed = strtolower(end($imgExtenion));
    
                    $Extenion = array('jpg', 'jpeg','png');

                    
                    if(in_array($Allowed, $Extenion) === true){
                        $time = time();

                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($img_TmpName, 'employePics/'.$new_img_name)){
                            $date = date('Y-m-d');
                            $status = "Active";
                            if($password !== $passwordVerification){
                                echo 'Passwords are Not Matching';
                            }else {
                                $sql1 = "INSERT INTO `employee`(fname, lname, email, password, passwordVerification, img, joinedDate, status) 
                                VALUES('{$fname}','{$lname}', '{$email}', '{$password}','{$passwordVerification}','{$new_img_name}', '{$date}', '{$status}')";
                                    mysqli_query($conn,$sql1);
                                if($sql1){
                                    echo 'Success';
                                }else {
                                    echo 'Somthing Went wrong';
                                }
                            }
                        }
                    }else {
                        echo 'Please Select an image';
                    }
                }else {
                    echo 'Cannot Upload This Type of image';
                }

                
            }

            
        }
    }else{
        echo ' All fields are required';
    }



?>