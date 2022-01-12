<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./main.css">
    <title>Admin</title>
</head>
<body>
    <main class="hero">
        <nav class="navbar">
            <div class="logo">
                <img src="../img/logo.png" alt="">
            </div>
            <div class="menu-icon" id="menu-icon">
                <div class="lines"></div>
            </div>
            <div class="search-field">
                <input type="search" placeholder="Search...">
                <i class="fas fa-search"></i>
            </div>
            <div class="user-admin">
                <div class="user-circle">
                    <img src="#">
                </div>
                <div class="info">
                    <h1>Jhon Smith</h1>
                    <h3>Admin</h3>
                </div>
            </div>
            <div class="hidden" id="hidden">
                <div class="close-icon" id="close-icon"></div>
                <div class="search-field">
                <input type="search" placeholder="Search...">
                <i class="fas fa-search"></i>
            </div>
            <!-- <div class="user-admin">
                <div class="user-circle">
                    <img src="#">
                </div>
                <div class="info">
                    <h1>Jhon Smith</h1>
                    <h3>Admin</h3>
                </div>
            </div> -->
            </div>
        </nav>
        <div class="sidebar">
            <ul>
                <li>
                    <i class='bx bx-grid-alt'></i>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <i class="fas fa-cubes"></i>
                    <a href="#">Products</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="#">Messages</a>
                </li>
                <li>
                    <i class="fas fa-users-cog"></i>
                    <a href="#">Manage Employee</a>
                </li>
            </ul>
            <div class="logout">
                <h2>Logout</h2>
                <i class="fas fa-power-off"></i>
            </div>
        </div>
        <section class="content">
            <h1>Dashboard</h1>
            <div class="boxs-container">
                <div class="box">
                    <h2>Total Employees</h2>
                    <div class="box-content">
                        <h2>0</h2>
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="box">
                    <h2>Total Products</h2>
                <div class="box-content">
                    <h2>0</h2>
                    <i class='bx bx-package'></i>
                    </div>
                </div>
                <div class="box">
                    <h2>Total added Products</h2>
                <div class="box-content">
                    <h2>0</h2>
                    <img src="../img/box.png">
                </div>
                </div>
                <div class="box">
                    <h2>Total Removes Products</h2>
                <div class="box-content">
                    <h2>0</h2>
                    <img src="../img/remove.png">
                </div>
                </div>
            </div>
            <div class="table-container">
                <div class="table-content">
                    <h1>List of Actions</h1>
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
                            <tr>
                                <td>Jhon</td>
                                <td>Product</td>
                                <td>Date</td>
                                <td>
                                    <div class="action-type">
                                        <i class="fas fa-plus-circle"></i>
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                            <td>Jhon</td>
                                <td>Product</td>
                                <td>Date</td>
                                <td>
                                    <div class="action-type">
                                        <i class="fas fa-plus-circle"></i>
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                            <td>Jhon</td>
                                <td>Product</td>
                                <td>Date</td>
                                <td>
                                    <div class="action-type">
                                        <i class="fas fa-plus-circle"></i>
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                            <td>Jhon</td>
                                <td>Product</td>
                                <td>Date</td>
                                <td>
                                    <div class="action-type">
                                        <i class="fas fa-plus-circle"></i>
                                        <i class="fas fa-minus-circle"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="employee-content">
                    <h1>Recent Employees</h1>
                    <div class="employee-list">
                        <div class="info-container">
                            <div class="circle-emp">
                                <img src="#" alt="">
                            </div>
                            <h1>Employe Name</h1>
                        </div>
                        <div class="info-container">
                            <div class="circle-emp">
                                <img src="#" alt="">
                            </div>
                            <h1>Employe Name</h1>
                        </div>
                        <div class="info-container">
                            <div class="circle-emp">
                                <img src="#" alt="">
                            </div>
                            <h1>Employe Name</h1>
                        </div>
                        <div class="info-container">
                            <div class="circle-emp">
                                <img src="#" alt="">
                            </div>
                            <h1>Employe Name</h1>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>








<script src="./index.js"></script>
<script src="https://kit.fontawesome.com/18228bcc89.js" crossorigin="anonymous"></script>
</body>
</html>