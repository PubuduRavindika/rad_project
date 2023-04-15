<?php
    require_once("config.php");
    $current_index = $_SESSION['current_student_index'];
    $jm_choice = $_SESSION['jm_choice'];
    $jm_comb = $_SESSION['jm_comb'];

    $check_query = "SELECT student_id FROM selection_form_table WHERE student_id = $current_index";

    $query;

    if($q_return = mysqli_query($conn, $check_query)){
        if(mysqli_num_rows($q_return) > 0){
            $query = "UPDATE selection_form_table SET jm_choice_$jm_choice = '$jm_comb' WHERE student_id = $current_index"; 
        }
        else{
            $query = "INSERT INTO selection_form_table (jm_choice_$jm_choice, student_id) VALUES ('$jm_comb',$current_index)";
        }
    }

    

    if($q_return = mysqli_query($conn, $query)){
        $_SESSION['jm_choice'] ="";
        $_SESSION['jm_comb'] ="";
        header("Location:sub_view.php");
    }

?>