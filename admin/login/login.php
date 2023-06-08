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
    <title>Admin</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<section class="login_section">
        <div class="login_box">
            <h1>Admin Login</h1>
            <?php
            if(isset($_GET["result"])){
                echo "<p>".$_GET['result']."</p>";
            }
            ?>
            <form action="action_admin_login.php" method="POST">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                <div>
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </section>
</body>
</html>