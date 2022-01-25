<?php
    
    include 'connection.php';
    $sql = "SELECT * FROM `employee`";
    $query = mysqli_query($conn,$sql);   
    // $result = mysqli_fetch_all($query);
    $result = mysqli_fetch_assoc($query);
    // while($row_users = mysqli_fetch_assoc($query));
    // while($names = mysqli_fetch_assoc($query));

    
?>

<nav class="navbar">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
            <div class="menu-icon" id="menu-icon">
                <div class="lines"></div>
            </div>
            <div class="search-field">
                <input type="search" placeholder="Search...">
                <i class="fas fa-search"></i>
            </div>
           
            <!-- ../signupValidation/php/UploadedImages/ -->
            <div class="user-admin">
                <div class="user-circle">
                <!-- <img src="<?php echo "../signupValidation/php/UploadedImages/". $result['img']?>"> -->
                </div>
                <div class="info">
                    <h1 id="Actual_Name"><?php echo $result['fname'].' '. $result['lname']?></h1>
                    <h3>Admin</h3>
                </div>
                <i class="fas fa-edit" id="edit_name"></i>
                <div class="edit" id="popup_edit">
                    <input type="text" placeholder="Enter Your Name" class="changeName" id="name">
                    <button id="changeNameBtn">Change</button>
                </div>
            </div>
            </div>
        </nav>
        <div class="sidebar" id="sidebar-showed">
            <ul>
                <li>
                    <i class='bx bx-grid-alt' id="dashboard-icon"></i>
                    <a href="#" id="dashboard">Dashboard</a>
                </li>
                <li id="hide">
                    <i class="fas fa-cubes"></i>
                    <a href="../admin-pages/admin-products/products.php" id="products">Products</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="../admin-pages/messages/message.php" id="messages">Messages</a>
                </li>
                <li id="hide">
                    <i class="fas fa-users-cog"></i>
                    <a href="/admin-pages/admin-manage/manage.php" id="manage-employee">Manage Employee</a>
                </li>
               
            </ul>
          
            <div class="logout" id="logout_form">
                <h2>Logout</h2>
                <!-- <a href="../signupValidation/php/logout.php?log=<?php echo $result['id']?>">Logout</a> -->
                <i class="fas fa-power-off" id="logout"></i>
            </div>
        </div>
</nav>
        <script src="https://kit.fontawesome.com/18228bcc89.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
