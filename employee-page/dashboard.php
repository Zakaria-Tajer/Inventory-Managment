<?php

    session_start();

if(!isset($_SESSION['id'])){
    header("location: /index.php");
}

?>

<body>
    <!-- <div class="heros"> -->
    <?php
        include_once './header.php';
        // include_once './php/prodConn.php';
        include_once '../admin-pages/navbar.php';
        
    ?>

    <!-- </div> -->

        <?php
            include "./php/prodConn.php";
            
        ?>
        <!-- <div class="">
            <i class="fas fa-bars" id="menu-bars"></i> -->
        </div>
        <button class="button-29" role="button" id="add_products">Add Product</button>
        <div class="showed_up" id="showed_up">
            <div class="ic">
                <i class="fas fa-times" id="close"></i>
            </div>
            <form class="adding" id="from_added">
                <input type="text" id="product_name" name="produtName" placeholder="Product_Name..">
                <input type="text" name="productId" placeholder="Prodcut_id..">
                <input type="text" name="productPrice" placeholder="Product_Price..">
                <input type="file" name="images"  accept="image">
                <!-- <img src="./php/uploaded_phones/" alt=""> -->
                <button type="submit" id="add_btn" name="add-row">Add</button>
            </form>
        </div>
        <div class="text-p">
            <i class="fas fa-bars" id="menu-bars"></i>
            <h1>Product Management</h1>
        </div>
        <div class="containers" id="containers">
        <?php
           $sql = "SELECT * FROM `produc`";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
           ?>
            <div class="container" id="container_all">
                
                <div class="img_uploaded">
                    <img src="<?php echo "./php/uploaded_phones/". $row['product_img']?>">
                </div>
                <div class="info_pro">
                    <!-- <h1></h1> -->
                    <h1>Name: <?php echo $row['product_name'];?></h1>
                    <h3>Id: <?php echo $row['product_unique_id'];?></h3>
                    <h1>Price: <?php echo $row['product_price'];?> Dh</h1>
                    <div class="color_container">
                        <!-- <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div> -->
                    </div>   
                </div>

                <div class="rm_md" id="button_form">
                    <!-- <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>"> -->
                    <!-- <button class="rm"  name="delete" id="rem-btn" type="submit">Remove</button> -->
                    <a href="./php/rm.php?delete=<?php echo $row['id'];?>" id="rem-btn" class="button_remove">Remove</a>
                    <button class="md" id="modifier_btns">Modifier</button>
                    <!-- <img src="./dashboard.php" alt=""> -->
               </div>

                <form class="form" id="formed" action="<?php $row['id']?>">
                    <input type="text" placeholder="Product Name" name="UpdateName" >
                    <input type="text" placeholder="Product id" name="UpdateId" >
                    <input type="text" placeholder="Product price" name="UpdatePrice">
                    <button class="md" name="update-btn" id="update" type="submit">Modifier</button>
                </form>
                </div>
                <?php }
           }
           ?>
        </div>
        
            
       


    </div>
    <script src="./index.js"></script>
    <script src="./js//removedProducts.js"></script>
    <script src="./js/product.js"></script>
    <script src="https://kit.fontawesome.com/18228bcc89.js" crossorigin="anonymous"></script>
</body>
</html>