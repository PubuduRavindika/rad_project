<?php

require_once("config.php");

if(isset($_POST['index']) && isset($_POST['password'])){

    // For Security reasons
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $index = validate($_POST['index']);
    $password = validate($_POST['password']);

    if(empty($index) || empty($password)){
        header("Location:index.php?result=Invalid username or password.");
    }
    else {
        $login_query = "SELECT student_index_number, student_initials_name ,student_id,student_password,student_first_time_login FROM student_table WHERE student_index_number = '$index'";

        if($q_return = mysqli_query($conn,$login_query)){
            $login_result = mysqli_fetch_assoc($q_return);
            echo $login_result['student_password'];
            if($login_result['student_password'] == $password){
                // Login Successful
                // Initializing Session Variables
                $_SESSION["current_student_id"] = $login_result['student_id'];
                $_SESSION["current_student_index"] = $login_result['student_index_number'];
                $_SESSION["current_student_name"] = $login_result['student_initials_name'];

                if($login_result['student_first_time_login']){
                    header("Location:add_students_details.php");
                }
                else{
                    header("Location:dashboard.php");
                }
            }
            else{
                header("Location:index.php?result=Invalid Password!");
            }
        }
        else{
            echo "Something wrong!";
        }
    }

}
else{
    header("Location:index.php");
}

?>