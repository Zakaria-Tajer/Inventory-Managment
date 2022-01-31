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
                <div class="info">
                    <!-- <h1></h1> -->
                    <h1>Name:<?php echo $row['product_name'];?></h1>
                    <h3>Id: <?php echo $row['product_unique_id'];?></h3>
                    <h1>Price: <?php echo $row['product_price'];?> Dh</h1>
                    <h1>Product Color:</h1>
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



           <div class="status">
                <div class="circle-status"></div>
                <h3>Active</h3>
            </div>


            <!-- reciver -->
            <!-- <div class="senter-message"></div> -->
            <div class="reciver-message"></div>
            <!-- reciver -->
            <!-- <div class="senter-message"></div> -->
            <div class="reciver-message"></div>
            <!-- reciver -->
            <!-- <div class="senter-message"></div> -->
            <div class="reciver-message"></div>
            <!-- reciver -->
            <!-- <div class="senter-message"></div> -->
            <div class="reciver-message"></div>
            <!-- reciver -->
            <!-- <div class="senter-message"></div> -->
            <div class="reciver-message"></div>