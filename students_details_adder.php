<?php
require_once("config.php");

$current_student_id;
if(isset($_SESSION['current_student_id'])){
    $current_student_id = $_SESSION['current_student_id'];
    $current_student_index = $_SESSION['current_student_index'];
}
else{
    header("Location:index.php?result='Login First'");
}
 

if(isset($_POST['st_full_name']) && isset($_POST['st_telephone']) && isset($_POST['st_email']) && isset($_POST['st_password']) && isset($_POST['st_password_confirm']) && isset($_FILES['st_image'])){

    // For Security reasons
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $st_full_name = validate($_POST['st_full_name']);
    $st_telephone = validate($_POST['st_telephone']);
    $st_email = validate($_POST['st_email']);
    $st_password = validate($_POST['st_password']);
    $st_password_confirm = validate($_POST['st_password_confirm']);
    $st_image_temp_name = $_FILES['st_image']['tmp_name'];
    $st_image_name = $_FILES['st_image']['name'];

    if(empty($st_full_name) || empty($st_telephone) || empty($st_email) || empty($st_password) || empty($st_password_confirm)){
        header("Location:add_students_details.php?result='Fill All'");
    }
    else{
        if($st_password == $st_password_confirm){

            $img_extesion = strtolower(pathinfo($st_image_name, PATHINFO_EXTENSION));

            $new_image_name = "IMG-". $current_student_index.".".$img_extesion;

            move_uploaded_file($st_image_temp_name, "images/students/".$new_image_name);

            $set_students_details_query = "UPDATE student_table SET student_full_name = '$st_full_name', student_telephone_number = '$st_telephone', student_email = '$st_email', student_password = '$st_password', student_image = '$new_image_name', student_first_time_login = 0 WHERE student_id = $current_student_id";

            echo $set_students_details_query;

            if($q_return = mysqli_query($conn, $set_students_details_query)){
                // echo "Done";
                // $sql = "SELECT student_image FROM student_table where student_id = $current_student_id";
                // $q_return = mysqli_query($conn, $sql);
                // $result = mysqli_fetch_assoc($q_return);
                // echo "<img src = 'images/students/".$result['student_image']."'>";
                header("Location:dashboard.php");
            }
            else{
                echo "Something went wrong";
            }
        }
        else{
            header("Location:add_students_details.php?result='Invalid Password Combinations'");
        }
        
    }

}
else{
    // header("Location:index.php");
    echo $_FILES['st_image'];
}?>