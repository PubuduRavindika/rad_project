<?php

    require ("../../config/config.php");

    if(isset($_SESSION["current_admin"])){
        header("Location:admin_dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Admin Login Page</title>
</head>
<body>
    <div class="container">
        <div class="login-left">
            <div class="login-header">
                <h1 class="h1-header">Welcome to Students Registration - Admin Login</h1>
                <!-- <h1 class="h1-header">Admin Login</h1> -->
                <p class="p-header">E-Registration System - wayamba University</p>
            </div>
            <form class="login-form" action="action_admin_login.php" method="POST">
                <div class="login-form-content">
                    <?php
                        if(isset($_GET["result"])){
                            echo "<p class = 'error'>".$_GET['result']."</p>";
                        }
                    ?>
                    <div class="form-item">
                        <label for="email" class="email-label">Enter Username:</label>
                        <input type="text" id="username" name= "username" class="email">                        
                    </div>
                    <div class="form-item">
                        <label for="password" class="password-label">Enter Password</label>
                        <input type="pssaword" id="password" class="password" name="password">                        
                    </div>
                    <div class="form-item">
                        <a href="#" class="a-fogetpassword">Forgotten Password?</a>
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckbox" class="rememberMeCheckbox" checked>
                            <label for="checkbox" id="checkboxLable" class="checkboxLable">Remember me</label>
                        </div>
                    </div>
                    <button type="submit">LOG IN</button>
                </div>
                <!-- <div class="login-form-footer">
                    <a href="#" class="a">
                        <img width="30" src="google.png" alt="">
                        Google Login
                    </a>
                </div> -->
            </form>
        </div>
        <div class="login-right">
            <img src="admin.svg" width="80%">
        </div>
    </div>
</body>
</html>