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
        <div>
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    <div class="container" id="container">
        <div class="managing">
            <h1>Product Managing</h1>
        </div>
        <div class="wrapper" id="wrapper">
            <div class="img-container" id="img" name="img">
                <img src="#">
            </div>
            <div class="info-product">
                <h1><?php ?>Product Name</h1>
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
                <!-- <button style="background-color: #357EBD;" id="addProduct">Add</button> -->
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <form class="interactionsBtns" id="interaction" action="#">
                <input type="text" placeholder="Product Name" name="produtName">
                <input type="text" placeholder="Product id" name="productId">
                <input type="text" placeholder="Product price" name="productPrice">
                <div class="btn-type">
                    <button style="background-color: #357EBD" id="added" type="submit">addProduct</button>
                    <button style="background-color: #D9534F;" id="removed" name="remove">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified" name="modified">Reduction Product</button>
                </div>
            </form>
        </div>

        <!-- <div class="wrapper" id="wrapper">
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
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div>

        <div class="wrapper" id="wrapper">
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
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div>

        <div class="wrapper" id="wrapper">
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
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <form class="interactionsBtns" id="interaction" action="#">
                <input type="text" placeholder="Product Name" name="product-name">
                <input type="text" placeholder="Product id" name="product-id">
                <input type="text" placeholder="Product price" name="product-price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added" type="submit" name="add">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </form>
        </div>

        <div class="wrapper" id="wrapper">
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
                <button style="background-color: #357EBD;" id="addProduct">Add</button>
                <button style="background-color: #D9534F;" id="removeProduct">Remove</button>
                <button style="background-color: #f4c430" id="modifierProduct">Reduction</button>
            </div>
            <div class="interactionsBtns" id="interaction">
                <input type="text" placeholder="Product Name">
                <input type="text" placeholder="Product id">
                <input type="text" placeholder="Product price">
                <div class="btn-type">
                    <button style="background-color: #357EBD;" id="added">Add Product</button>
                    <button style="background-color: #D9534F;" id="removed">Remove Product</button>
                    <button style="background-color: #f4c430" id="modified">Reduction Product</button>
                </div>
            </div>
        </div> -->
    </div>
    <script src="./index.js"></script>
    <script src="./js/product.js"></script>
</body>
</html>