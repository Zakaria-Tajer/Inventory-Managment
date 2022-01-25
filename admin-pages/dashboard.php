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
    <link rel="stylesheet" href="./main.css">
    <title>Admin</title>
</head>
<body>
    <main class="hero">
        <?php
            include 'navbar.php';
            ?>
            <div>
                <i class="fas fa-bars" id="menu-bars"></i>
            </div>
            <?php
                include './connection.php';
                $query = mysqli_query($conn, "SELECT * FROM `employee`");
                $row = mysqli_num_rows($query);
                
                $query1 = mysqli_query($conn, "SELECT * FROM `products`");
                $productRows = mysqli_num_rows($query1);
                $products = mysqli_fetch_assoc($query1);

                $query = "SELECT * FROM `employee`";
                $sql = mysqli_query($conn, $query);
                $employee = mysqli_fetch_assoc($sql);
                
                
            ?>
        <section class="content">
            <h1 class="dash-board">Dashboard</h1>
            <div class="boxs-container">
                <div class="box">
                    <h2>Total Employees</h2>
                    <div class="box-content">
                        <!-- <img src="./php/admin.php" alt=""> -->
                        <h2><?php echo $row?></h2>
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="box">
                    <h2>Total Products</h2>
                <div class="box-content">
                    <h2><?php echo $productRows?></h2>
                    <i class='bx bx-package'></i>
                    </div>
                </div>
                
                <div class="box">
                    <h2>Total added Products</h2>
                <div class="box-content">
                    <!-- <h2><?php print_r($read1);?></h2> -->
                    <img src="../img/box.png">
                </div>
                </div>
                <?php 
                    $fileHandle = fopen('../employee-page/php/clicks.txt', 'r+');
                    $read = fread($fileHandle, filesize('../employee-page/php/clicks.txt'));

                ?>
                <div class="box">
                    <h2>Total Removes Products</h2>
                <div class="box-content">
                    <h2 id="removedProductsCount"><?php print_r($read);?></h2>
                    <img src="../img/remove.png">
                </div>
                </div>
            </div>
          

            <div class="table-container">
                <div class="title-action">
                    <h1>List of Actions</h1>
                </div>
                <div class="table-content">
                    <table class="container-table">
                        <thead>
                        <tr>
                            <th>Employe Name</th>
                            <th>Product Name</th>
                            <th>Date of Action</th>
                            <th>Action Type</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                        


                            $query2 = "SELECT * FROM `employee` ";
                            $sql2 = mysqli_query($conn, $query2);
                             if(mysqli_num_rows($sql2)>= 0){
                                while($names = mysqli_fetch_assoc($sql2)){
                        ?>
                            <tr>
                                <td><?php echo $names['fname']?></td>
                                <td><?php echo $products['product_name']?></td>
                                <td><?php echo $names['joinedDate']?></td>
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

                <div class="employee-content">
                    <div class="title-employee">
                        <h1>Recent Employees</h1>
                    </div>
                    <div class="employee-list">
                        <?php 
                            $query = "SELECT * FROM `employee`";
                            $sql3 = mysqli_query($conn, $query);
                            if(mysqli_num_rows($sql3)> 0){
                            while($emp = mysqli_fetch_assoc($sql3)){
                        
                        ?>
                        <div class="info-container">
                            <div class="circle-emp">
                                <img src="<?php echo "../admin-pages/admin-manage/employePics/". $emp['img']?>">
                            </div>
                            <h1><?php echo $emp['fname'];?></h1>
                        </div>
                        <?php }
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
            </section>
        </main>


        <script src="./index.js"></script>
        <script src="./js/admin.js"></script>
</body>
</html>