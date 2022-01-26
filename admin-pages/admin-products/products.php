<?php
    session_start();

    if(!isset($_SESSION['unique_id'])){
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
                            // $sql = "SELECT * FROM `produc`";

                            $sql3 = "SELECT * FROM `produc` JOIN `employee` on employee.id= produc.emp_id"; 
                            $query = mysqli_query($conn, $sql3);
                            
                            // $sql2 = "SELECT * FROM `employee`";
                            // $query2 = mysqli_query($conn, $sql);
                            
                            // $emp = mysqli_fetch_assoc($query2);
// 
                            if(mysqli_num_rows($query)> 0){
                                while($results = mysqli_fetch_assoc($query)){
                            ?>

                            <tr>
                                <td><?php echo $results['fname']?></td>
                                <td><?php echo $results['product_name']?></td>
                                <td><?php echo $results['product_unique_id']?></td>
                                <td><?php echo $results['addedDate']?></td>
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