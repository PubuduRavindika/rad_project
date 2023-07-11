<?php

    require ("../../config/config.php");

    
    if(isset($_POST['submit'])){
        $nic = $_POST['nic'];
        $password = $_POST['password'];
        
        $sql = "SELECT admin_nic, admin_password FROM admin_table WHERE admin_nic = '$nic'";

        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            if($row['admin_password'] == $password){
                header("location:../dashboard/dashboard.php");
                echo "Done";
            }
        }
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
                <h1 class="h1-header">Course Registration System</h1>
                <!-- <h1 class="h1-header">Admin Login</h1> -->
                <p class="p-header">Staff Login - Wayamba University</p>
            </div>
            <form class="login-form" action="" method="POST">
                <div class="login-form-content">
                    <?php
                        if(isset($_GET["result"])){
                            echo "<p class = 'error'>".$_GET['result']."</p>";
                        }
                    ?>
                    <div class="form-item">
                        <label for="email" class="email-label">Enter NIC:</label>
                        <input type="text" id="username" name= "nic" class="email">                        
                    </div>
                    <div class="form-item">
                        <label for="password" class="password-label">Enter Password</label>
                        <input type="password" id="password" class="password" name="password">                        
                    </div>
                    <div class="form-item">
                        <!-- <a href="#" class="a-fogetpassword">Forgotten Password?</a> -->
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckbox" class="rememberMeCheckbox" checked>
                            <label for="checkbox" id="checkboxLable" class="checkboxLable">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" name = "submit">LOG IN</button>
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
            <img src="learning.svg" width="80%">
        </div>
    </div>
</body>
</html>