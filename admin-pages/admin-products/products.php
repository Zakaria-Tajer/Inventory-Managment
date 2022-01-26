<?php
    session_start();

    if(!isset($_SESSION['id'])){
        header("location: /index.php");
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="./style.css">
    <title>Products</title>
</head>
<body>
    <?php
        include('../navbar.php');
    ?>
            <div>
    
                <i class="fas fa-bars" id="menu-bars"></i>
            </div>
            <div class="action-list">
                <h1>List of Actions</h1>
            </div>
        <div class="products-container">
            <div class="table-content">
                    <table class="container-table">
                        <thead>
                        <tr>
                            <th>Employe Name</th>
                            <th>Product Name</th>
                            <th>Product Id</th>
                            <th>Date of Action</th>
                            <th>Action Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            include '../connection.php';
                            $sql = "SELECT * FROM `employee`";
                            $query = mysqli_query($conn, $sql);

                            $sql2 = "SELECT * FROM `produc`";
                            $query2 = mysqli_query($conn, $sql2);

                            
                            $prod = mysqli_fetch_assoc($query2);

                            if(mysqli_num_rows($query)> 0){
                                while($results = mysqli_fetch_assoc($query)){
                            ?>

                            <tr>
                                <td><?php echo $results['fname']?></td>
                                <td><?php echo $prod['product_name']?></td>
                                <td><?php echo $prod['id']?></td>
                                <td><?php echo $prod['addedDate']?></td>
                                <td>
                                    <div class="action-type">
                                        <i class="fas fa-plus-circle"></i>
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            }
                        }
                        ?>
                           
                        </tbody>
                    </table>
                </div>
        </div>
    
    <script src="./index.js"></script>
    <script src="/app.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>