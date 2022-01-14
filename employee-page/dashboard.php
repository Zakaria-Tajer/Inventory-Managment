<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin-pages/main.css">
    <link rel="stylesheet" href="./main.css">
    <title>DashBoard</title>
</head>
<body>
    <?php
        include('../admin-pages/navbar.php');
    ?>
    <div class="container">
        <h1>Product Managing</h1>
        <div class="wrapper">
            <div class="img-container">
                <img src="#">
            </div>
            <div class="info-product">
                <h1>Product Name</h1>
                <h3>#Product Id</h3>
                <h1>Product Price</h1>
                <div class="product-color">
                    <h1>Product Color: </h1>
                    <div class="color-container">
                        <div class="color" style="background-color:yellow;"></div>
                        <div class="color" style="background-color:teal;"></div>
                        <div class="color" style="background-color:steelblue;"></div>
                        <div class="color" style="background-color:slateblue ;"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button style="background-color: #357EBD;">Add</button>
                <button style="background-color: #D9534F;">Remove</button>
                <button style="background-color: #f4c430">Reduction</button>

            </div>
        </div>
    </div>
</body>
</html>