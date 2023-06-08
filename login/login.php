<?php

    require "../config/config.php";

    if(isset($_SESSION["current_student_id"])){
        header("Location:../dashboard/dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <section class="login_section">
        <div class="login_box">
            <h1>Login to Your Account</h1>
            <?php
            if(isset($_GET["result"])){
                echo "<p>".$_GET['result']."</p>";
            }
            ?>
            <form action="login_validation.php" method="POST">
                <label for="index">Index: </label>
                <input type="text" id="index" name="index">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                <div>
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
        <a href="../admin/index.php">Log in as a admin</a>
    </section>
</body>
</html>