<?php
    require "../config/config.php";

    if(!isset($_SESSION["current_student_id"])){
        header("Location:../login/login.php?result=Please Login First");
    }

    $current_student_id = $_SESSION['current_student_id'];
    $get_student_details_query = "SELECT student_index_number, student_nic_number, student_initials_name FROM student_table WHERE student_id = $current_student_id";

    $student_details;

    if($q_return = mysqli_query($conn, $get_student_details_query)){
        $student_details = mysqli_fetch_assoc($q_return);
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
    <div>
        <p>Login as: <?php echo $student_details['student_initials_name']?></p>
        <p>Index: <?php echo $student_details['student_index_number']?></p>
        <form action="../logout/logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
    </div>
    <div>
        <p><?php
            if(isset($_GET['result'])){
                echo $_GET['result'];
            }
        ?></p>
        <form action="students_details_adder.php" method = "POST" style = "display:flex; flex-direction:column; width: 400px;" enctype="multipart/form-data">
            <label for="st_full_name">Full Name: </label>
            <input type="text" name="st_full_name" id="st_full_name" required>

            <label for="st_telephone">Telephone: </label>
            <input type="tel" name="st_telephone" id="st_telephone" required>

            <label for="st_email">Email: </label>
            <input type="email" name="st_email" id="st_email" required>

            <label for="st_image">Image: </label>
            <input type="file" accept = ".jpg, .png, .jpeg" name="st_image" id="st_image" onchange = "imgPreview(this)" required>

            <img src = "../assets/images/180.png" id = "st_image_preview" style = "max-width:180px;"/ >

            <label for="st_password">New Password: </label>
            <input type="password" name="st_password" id="st_password" required> 

            <label for="st_password_confirm">Confirm Password: </label>
            <input type="password" name="st_password_confirm" id="st_password_confirm" required>

            <input type="submit" name="" id="" value = "Submit">

        </form>
    </div>

    <script src="../assets/script.js"></script>
</body>
</html>