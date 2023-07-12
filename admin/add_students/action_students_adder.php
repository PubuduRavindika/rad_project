<?php
require "../../config/config.php";

if(!isset($_SESSION["current_admin"])){
    header("Location:../login/login.php?result=Please Login First");
}
 

if(isset($_POST['index']) && isset($_POST['name']) && isset($_POST['nic_number']) && isset($_POST['combination']) && isset($_POST['batch_id'])){

    // For Security reasons
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $index = validate($_POST['index']);
    $name = validate($_POST['name']);
    $nic_number = validate($_POST['nic_number']);
    $combination = validate($_POST['combination']);
    $batch_id = validate($_POST['batch_id']);

    $student_add_query = "INSERT INTO student_table (student_index_number, student_nic_number, student_initials_name,student_batch_id, student_base_comb,student_password, student_first_time_login) VALUES ($index, '$nic_number', '$name', $batch_id, $combination,'$nic_number' ,'1')";

    echo $student_add_query;

    if(mysqli_query($conn,$student_add_query)){
        echo "Success";
        header("location:../dashboard/admin_dashboard.php");
    }
    else{
        echo "Something went wrong!!";
    }
}
