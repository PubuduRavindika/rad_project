<?php

    require "../config/config.php";

    if(!isset($_SESSION["current_student_id"])){
        header("Location:../login/login.php?result=Please Login First");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Dashboard
    <?php 
        echo "<p>Login as: ". $_SESSION["current_student_index"]. "</p>";

        $current_index = $_SESSION["current_student_index"];

        $get_st_details_query = "SELECT student_initials_name, student_nic_number, student_image, student_base_comb FROM student_table WHERE student_index_number = $current_index";
        if($q_return = mysqli_query($conn, $get_st_details_query)){
            $st_details = mysqli_fetch_assoc($q_return);

            // Initialzing Session Variables
            $_SESSION['current_base_comb'] = $st_details['student_base_comb'];
            $_SESSION['current_image'] = $st_details['student_image'];
            $_SESSION['current_nic_number'] = $st_details['student_nic_number'];

            echo "<img src = '../assets/images/students/".$st_details['student_image']."'/ style = 'width:180px'>";
            echo "<p>" . $st_details['student_initials_name']. "</p>";
            echo "<p>" . $st_details['student_nic_number']."</p>";
        }
    ?>
    <form action="../logout/logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <div>
        <table>
            <tr>
                <td>1st Year Registration</td>
                <td><a href=""><input type="button" value="Select" disabled></a></td>
            </tr>
            <tr>
                <td>2nd Year Registration</td>
                <td><a href=""><input type="button" value="Select" disabled></a></td>
            </tr>
            <tr>
                <td>3rd Year Selection Forms</td>
                <td><a href="../third_year_selection/third_year_selection.php"><input type="button" value="Select"></a></td>
            </tr>
            <tr>
                <td>3rd Year Registration</td>
                <td><a href=""><input type="button" value="Select" disabled></a></td>
            </tr>
            <tr>
                <td>4th Year Registration</td>
                <td><a href=""><input type="button" value="Select" disabled></a></td>
            </tr>
        </table>
    </div>
</body>
</html>