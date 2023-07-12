<?php
    require_once '../../config/config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['admin_name'];
        $nic_number = $_POST['nic_number'];
        $email = $_POST['email'];

        $insert_ma = "INSERT INTO admin_table (admin_name, admin_nic, admin_email, admin_password, admin_type, first_time_login) VALUES ('$name', '$nic_number', '$email','$nic_number','hod','1')";

        if(mysqli_query($conn ,$insert_ma)){
            // header();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body class="sr-body">

    <div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p>Administrator</p>
                <div class="nav_btn_holder"><button onclick="location.href='../logout/action_admin_logout.php'" >LOGOUT</button></div>
            </span>
            <img src="profile-2.png" alt="">
        </div>
    </div>


    <div class="container">
        <header class="rf-header">Add Department Heads</header>
        <form action="" method="POST">
            
            <div class="sr-input-box">
                <label class="sr-lable">Name</label>
                <input class="sr-input" name="admin_name" type="text" placeholder="Enter Name" required>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">NIC Number</label>
                <input class="sr-input" name="nic_number" type="text" placeholder="Enter NIC Number" required>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">E-mail Address</label>
                <input class="sr-input" name="email" type="email" placeholder="Enter E-mail Address" required>
            </div>

            <button class="sr-button" type = "submit" name = "submit">Submit</button>

        </form>

    </div>
</body>
</html>