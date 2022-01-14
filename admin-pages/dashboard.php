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
</body>
</html>