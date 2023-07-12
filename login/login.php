<?php

require "../config/config.php";

if (isset($_SESSION["current_student_id"])) {
    header("Location:../dashboard/dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="login-left">
            <div class="login-header">
                <h1 class="h1-header">Course Registration System</h1>
                <p class="p-header">E-Registration System - WUSL</p>
            </div>
            <form class="login-form" action="login_validation.php" method="post">
                <div class="login-form-content">
                    <?php
                    if (isset($_GET["result"])) {
                        echo "<p class = 'error'>* " . $_GET['result'] . "</p>";
                    }
                    ?>
                    <div class="form-item">
                        <label for="index" class="email-label">Enter Index</label>
                        <input name="index" type="text" id="index" class="email">
                    </div>
                    <div class="form-item">
                        <label for="password" class="password-label">Enter Password</label>
                        <input type="password" id="password" class="password" name="password">
                    </div>
                    <div class="form-item">
                        <!-- <a href="#" class="a-fogetpassword">Forgotten Password?</a> -->
                        <p>
                            <a href="../staff/login/login.php" class="a-fogetpassword">Login as Staff Member</a>
                            <br />
                            <a href="../admin/login/login.php" class="a-fogetpassword">Login as Administrator</a>
                        </p>
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
            <img src="learning.svg" width="80%">
        </div>
    </div>
</body>

</html>