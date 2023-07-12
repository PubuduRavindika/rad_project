<?php

    require_once '../../../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="applocation-body">
<div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p>
                    <?php echo $_SESSION['current_student_name'] ?>
                </p>
                <div class="nav_btn_holder">
                    <span>
                        <?php echo $_SESSION['current_student_index'] ?>
                    </span>
                    <button onclick="location.href='../../../logout/logout.php'">LOGOUT</button>
                </div>
            </span>
            <?php
            echo "<img src = '../../../assets/images/students/" . $_SESSION['current_image'] . "'>";
            ?>
        </div>
    </div>

    <div class="main-container">
        <div class="headder">Third Year Selection Filled Forms</div>
        <?php

$student_id = $_SESSION['current_student_id'];

$sql = "SELECT * FROM jm_application_table WHERE student_id = '$student_id'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $app_id = $row['app_id'];
        $comb_id = $row['comb_id'];
        echo '
        <div class="application">
            <img class="app-img" src = "../../../assets/images/students/'.$_SESSION['current_image'].'"/> 
            <div class="details">'.$_SESSION['current_student_index'].'</div>
            <div class="details">'.$_SESSION['current_student_name'].'</div>
            <div class="details">3rd Year Selection</div>
            <button class="view-btn" onclick="location.href=\'../view_application.php?app_id='.$app_id.'&comb_id='.$comb_id.'\'">View</button>
        </div>
        ';
                    }
                }

            ?>

        <!-- <div class="application">
            <img class="app-img" src="profile-2.png" alt="">
            <div class="details">192153</div>
            <div class="details">W.M.D.I. Wijesundara</div>
            <div class="details">Lorem ipsum dolor sit amet.</div>
            <button class="view-btn">View</button>
        </div> -->
    </div>
    
</body>
</html>