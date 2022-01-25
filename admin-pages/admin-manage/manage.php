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
    <link rel="stylesheet" href="../admin-manage/manage.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../navbar.php');
        $query = "SELECT * FROM `employee`";
        $sql = mysqli_query($conn, $query);
        
    ?>

    <div>
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
    
    <div class="popupEmployeeAdded" id="popupEmployeeAdded">
        <form class="wrapper" id="warpperForm" enctype="multipart/form-data" action="#">
            <div class="create-text">
                <h1>Create An Account</h1>
            </div>
            <div class="errorDisplayer" id="errorDisplayer">
                <h3 id="textError"></h3>
            </div>
            <input type="text" placeholder="First Name.." name="Fname">
            <input type="text" placeholder="Last Name.."  name="Lname">
            <input type="email" placeholder="Email.." name="email"> 
            <input type="password" placeholder="Password.." name="password">
            <input type="password" placeholder="Re-Enter password.." name="passwordVerification">
            <input type="file" accept="image" name="img">
            <div class="btn">
                <button class="addFromAdmin" id="addFromAdmin" type="submit">Add</button>
            </div>
        </form>
    </div>
    <div class="list-container">
    <div class="add_class">
        <button style="background-color: #357EBD;" id="addEmployee" class="addEmployee">Add Employee</button>
        </div>
        <div class="manag-list">
            <h1>List of Actions</h1>
        </div>
        <div class="table-content">
            <table class="container-table">
                <thead>
                    <tr>
                        <th>Employe_id</th>
                        <th>First_Name</th>
                        <th>Last_Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th>Status</th>
                        <th>Employee Action</th>
                    </tr>
            <?php
                include '../connection.php';

                if(mysqli_num_rows($sql)> 0){
                    while($rows = mysqli_fetch_assoc($sql)){
            ?>
                </thead>
                <tbody>
                    <tr id="tr">

                        <td>#<?php echo $rows['id']?></td>
                        <td><?php echo $rows['fname']?></td>
                        <td><?php echo $rows['lname']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['joinedDate']?></td>
                        <td>
                        <div class="action-type" id="">
                            <div class="session-active" id="session_active">
                                <h4 id=""><?php echo $rows['status']?></h4>
                            </div>
                        
                            <!-- <i class="fas fa-plus-circle"></i> -->
                            <!-- <i class="fas fa-minus-circle"></i> -->
                        </div>
                        </td>
                        <td>
                            <div class="removeAndAdd">
                                <div class="add">
                                    <a href="./removeEmployee.php?delete=<?php echo $rows['id'];?>" id="rem" class="button_remove">Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php 
            }
        }
                
                ?>
                   
    </div>
    <script src="./index.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>