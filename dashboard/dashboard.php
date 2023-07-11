<?php

require "../config/config.php";

if (!isset($_SESSION["current_student_id"])) {
    header("Location:../login/login.php?result=Please Login First");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="dash-body">
    <?php
    $current_index = $_SESSION["current_student_index"];

    $get_st_details_query = "SELECT student_initials_name, student_nic_number, student_image, student_base_comb FROM student_table WHERE student_index_number = $current_index";
    if ($q_return = mysqli_query($conn, $get_st_details_query)) {
        $st_details = mysqli_fetch_assoc($q_return);

        // Initialzing Session Variables
        $_SESSION['current_base_comb'] = $st_details['student_base_comb'];
        $_SESSION['current_image'] = $st_details['student_image'];
        $_SESSION['current_nic_number'] = $st_details['student_nic_number'];
    }
    ?>
    <div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p><?php echo $_SESSION['current_student_name'] ?></p>
                <div class="nav_btn_holder">
                    <span><?php echo $_SESSION['current_student_index'] ?></span>
                    <button onclick="location.href='../logout/logout.php'">LOGOUT</button>
                </div>
            </span>
            <?php
            echo "<img src = '../assets/images/students/" . $_SESSION['current_image']. "'>";
            ?>
        </div>
    </div>

    <div class="dash-container">
        <div class="left-div">
            <button class="dash-button" disabled>1st Year Registration</button>
            <button class="dash-button" disabled>2nd Year Registration</button>
            <button class="dash-button" onclick="location.href='../third_year_selection/third_year_selection.php'">3rd Year Selection Forms</button>
            <button class="dash-button" disabled>3rd Year Registration</button>
            <button class="dash-button" disabled>4th Year Registration</button>
        </div>
        <div class="right-div">
            <div class="right-header">
                LOGING AS: <?php echo $_SESSION['current_student_index'] ?>
            </div>
            <?php
            echo "<img class = 'profile-img' src = '../assets/images/students/" . $st_details['student_image'] . "'>";
            ?>

            <div class="name">
                <?php echo $_SESSION['current_student_name'] ?>
            </div>
            <div class="id">
                <?php echo $_SESSION['current_student_nic'] ?>
            </div>
            <button class="change-btn">Change Passwaord</button>
        </div>
    </div>

</body>

</html>