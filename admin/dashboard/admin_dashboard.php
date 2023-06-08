<?php

    require "../../config/config.php";

    if(!isset($_SESSION["current_admin"])){
        header("Location:../login/login.php?result=Please Login First");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
</head>
<body>
    Dashboard Admin
    <?php 
        $current_admin = $_SESSION["current_admin"];

        $getname_query = "SELECT first_name, last_name FROM test_admins WHERE username = '$current_admin'";
        if($q_return = mysqli_query($conn, $getname_query)){
            $names = mysqli_fetch_assoc($q_return);
            echo "Login as: " . $names['first_name']. " " . $names['last_name'];
        }
    ?>
    <form action="../logout/action_admin_logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <ul>
        <li><a href="../add_students/add_students.php">Add New Students</a></li>
        <li><a href="../add_management/add_management.php">Add Management Assistants</a></li>
        <li><a href="../add_hod/add_department_heads.php">Add Department Heads</a></li>
        <li><a href="../add_counsellor/add_student_counsellor.php">Add Student Counsellor</a></li>
    </ul>
</body>
</html>