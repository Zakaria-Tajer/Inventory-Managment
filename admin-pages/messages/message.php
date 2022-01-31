<?php
    session_start();

    if(!isset($_SESSION['unique_id'])){
        header("location: /index.php");
    }
    include '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="./messages.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Message</title>
</head>
<body>


    <main class="hero_messages">
        <nav class="side_bar">
            <ul>
                <li>
                <i class='bx bx-grid-alt' id="hoverEffect"></i>
                    <a href="" id="nav-elements" class="links">Dashboard</a>
                </li>
                <li>
                    <i class="fas fa-cubes"  id="hoverEffect"></i>
                    <a href="" id="nav-elements" class="links">Products</a>
                </li>
                <li>
                    <i class="fas fa-envelope"  id="hoverEffect"></i>
                    <a href="" id="nav-elements" class="links">Messages</a>
                </li>
                <li>
                    <i class="fas fa-users-cog"  id="hoverEffect"></i>
                    <a href="" id="nav-elements" class="links">Manage </a>
                </li>
            </ul>
        </nav>

        <div class="users">
            <form class="input_form">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search">
            </form>
            <div class="users-list-container" id="container_users">
                

            </div>
            <div class="status">
            <div class="circle-status"></div>
            <h3>Active</h3>
        </div>  
    </div>
    <?php
        
        $query = mysqli_query($conn, "SELECT * FROM `employee`");


        $row = mysqli_fetch_assoc($query);
            

    ?>
    <div class="user-messages-container">
        <div class="wrapperF" id="wrapperF">
            <div class="user-bar">
                <div class="img-bar">
                    <img src="<?php echo "../admin-manage/employePics/". $row['img'];?> alt=">
                </div>
                
                <div class="user-name">
                    <h1 id="username"><?php echo $row['fname'];?></h1>
                    <h3>Employee</h3>
                </div>
            </div>
    <!-- <img src="./" alt=""> -->
            <?php 
            
                // $sql = "SELECT * FROM `msg` JOIN `userregisters` on userregisters.unique_id = msg.amin_key";
                // $query1 = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_assoc($query1); 
                ?>

            <div class="messages_container" id="messages_container">
                <!-- <div class="senter-message">
                    <h3 id="act-msg"><?php echo $row['msg']?></h3>
                </div> -->
                <!-- <div class="reciver-message">
                    <h3 id="act-msg"></h3>
                </div> -->

                </div>
                <form class="messages_senter-box" id="messages_senter_form">
                    <input type="text" placeholder="Enter Message..." name="message" id="input">
                    <div class="sent_icon">
                        <i class="fas fa-paper-plane" id="send"></i>
                    </div>
                </form>
         
        </div>
        <div class="onload" id="onload">
            <div class="img_loaded">
                <img src="/img/85693440-network-icon-vector-symbol-group-of-people-and-teamwork-of-connected-business-person-in-glyph-pictog.webp" alt="">
            </div>
            <div class="Connect">
                <h1>Connect With Your Employee Faster</h1>
            </div>
        </div>

    </div>



    </main>
    <script src="./messages.js"></script>
    <script src="./chat.js"></script>
    <script src="https://kit.fontawesome.com/18228bcc89.js" crossorigin="anonymous"></script>
</body>
</html>