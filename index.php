<?php
    session_start();

if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="main.css">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <div class="wrapper" id="sign-wrapper">
            <div class="title">
                <h1>Sign Up</h1>
            </div>
            <div class="btns">
                <button id="login">Login</button>
                <button id="SignUps">Sign Up</button>
            </div>
            <div class="errorText" id="errorText">
                <h1 id="ErrorText">d</h1>
            </div>
            <form class="form" action="#" id="form" enctype="multipart/form-data">
                <input type="email" name="Email" placeholder="Email" id="SignupEmail" required>
                <input type="password" name="Password_ver"  placeholder="password" id="passwordSign" required>
                <input type="password" name="Password_mat"  placeholder="Confirm password" id="passwordSign1" required>
                <input type="file" name="img"  accept="image" id="img-up">
                <!-- <label for="">Select iamge</label> -->
                <div class="btn-Sign-Up">
                    <button id="SignUp-btn" type="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <!-- ////// -->
        <div class="wrapper" id="login-wrapper">
            <div class="title">
                <h1>Login</h1>
            </div>
            <div class="btns">
                <button id="login-loaded">Login</button>
                <button id="Sign">Sign Up</button>
            </div>
            <div class="errorTextlogin" id="errorTextlogin">
                <h1 id="LoginText">d</h1>
            </div>
            <form class="form" action="#" id="login-form">
                <input type="email" name="loginEmail" placeholder="Email" required>
                <input type="password" name="loginPassword" id="pswLogin" placeholder="password" required>
                <div class="pswForgeted">
                    <a href="#">Forget password?</a>
                </div>
                <div class="btn-Sign-Up">
                    <button type="submit" id="login-btn" name="submit">Login</button>
                    <h3>Not a Member? <a href="#" id="link">Signup now</a></h3>
        
                </div>
            </form>
        </div>
    </div>



    <script src="./app.js"></script>
    <!-- <script src="./signupValidation/js/signup.js"></script> -->
    <script src="./signupValidation/js/login.js"></script>
    <script src="https://kit.fontawesome.com/99026984ca.js" crossorigin="anonymous"></script>
</body>
</html>