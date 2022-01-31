<?php

include 'connection.php';
//    session_start();
    if(isset($_SESSION['id'])){
        // $lname = $_SESSION['lname'];
    }
    
    
    
    // $img = $_SESSION['img'];
    // echo $img;
    $fname = $_SESSION['fname'];

    $sql = "SELECT * FROM `produc` JOIN `employee` on employee.id= produc.emp_id";
    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);

    // $img = $row['img'];
    
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
            <div class="user-admin" id="user">
                <div class="user-circle">
                <img src="<?php echo "../admin-pages/admin-manage/employePics/".$row['img']?>">
                
                </div>
                <div class="info">
                    <h1 id="Actual_Name"><?php echo $fname?></h1>
                    <h3>Admin</h3>
                </div>
                <i class="fas fa-bell" id="bell"></i>

            </div>
            </div>
        </nav>
        <div class="sidebar" id="sidebar-showed">
            <ul>
                <li>
                    <i class='bx bx-grid-alt' id="dashboard-icon"></i>
                    <a href="./dashboard.php" id="dashboard">Dashboard</a>
                </li>
                <li id="hide">
                    <i class="fas fa-cubes"></i>
                    <a href="./admin-products/products.php" id="products">Products</a>
                </li>
                <li class="messages_hide_emp" id="messages_hide_emp">
                    <i class="fas fa-envelope"></i>
                    <a href="../admin-pages/messages/message.php" id="messages">Messages</a>
                </li>
                <li id="messages_hide_admin">
                    <i class="fas fa-envelope" ></i>
                    <button class="buttonM" id="popupBtn">Messages</button>
                </li>
                <li id="hide">
                    <i class="fas fa-users-cog"></i>
                    <a href="/admin-pages/admin-manage/manage.php" id="manage-employee">Manage Employee</a>
                </li>
               
            </ul>
          
            <div class="logout" id="logout_form">
                <h2>Logout</h2>
                <i class="fas fa-power-off" id="logout"></i>
            </div>
        </div>
</nav>
        <script src="https://kit.fontawesome.com/18228bcc89.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
