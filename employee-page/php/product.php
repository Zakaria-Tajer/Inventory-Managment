<?php

    include_once('./prodConn.php');
    
    // echo '1';
    $productName = mysqli_real_escape_string($conn,$_POST['produtName']);
    $productId = mysqli_real_escape_string($conn,$_POST['productId']);
    $productPrice = mysqli_real_escape_string($conn,$_POST['productPrice']);

    if(!empty($productName) && !empty($productId) && !empty($productPrice)){


        $sql1 = "INSERT INTO  `products`(product_name, product_unique_id, product_price) 
        VALUES('{$productName}','{$productId}', '{$productPrice}')";

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

        
        $sql2 = mysqli_query($conn, "SELECT * FROM `products`");
        if(mysqli_num_rows($sql2)>0){
            while($row = mysqli_fetch_assoc($sql2)){
                echo $row['product_name'];
            }
        }
    }else {
        echo 'Must Contains Data';
    }

?>