<?php

    include_once('./prodConn.php');
    
    // echo '1';
    $productName = mysqli_real_escape_string($conn,$_POST['produtName']);
    $productId = mysqli_real_escape_string($conn,$_POST['productId']);
    $productPrice = mysqli_real_escape_string($conn,$_POST['productPrice']);

    if(!empty($productName) && !empty($productPrice)){

        if(isset($_FILES['images'])){
            $img_name = $_FILES['images']['name'];
            $img_TmpName = $_FILES['images']['tmp_name'];
            $img_Type = $_FILES['images']['type'];


            $imgExtenion = explode('.', $img_name);
            $Allowed = strtolower(end($imgExtenion));

            $Extenion = array('jpg', 'jpeg','png');

            if(in_array($Allowed, $Extenion) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($img_TmpName, 'uploaded_phones/'.$new_img_name)){
                    
                $id_optional = rand(time(), 10000);

                $sql1 = "INSERT INTO  `products`(product_name, product_unique_id, product_price, product_img) 
                VALUES('{$productName}','{$id_optional}', '{$productPrice}', '{$new_img_name}')";

                $check = mysqli_query($conn, "SELECT * FROM `products` WHERE product_name = '{$productName}'");
                if(mysqli_num_rows($check)> 0){
                    echo 'Name Already Exist';
                }else {
                    if($sql1){
                        mysqli_query($conn, $sql1);
                        // echo 'Inserted';
                        echo 'sucess';
                    }else {
                        echo 'Error';
                    }
                }
                }
            }else {
                echo 'this type of images cant be uploaded';
            }
        }else {
            echo 'Please Select an Image';
        }


    }else {
        echo 'Must Contains Data';
    }

?>