<?php

    require "../../config/config.php";
    
    $current_index = $_SESSION['current_student_index'];
    $gn_choice = $_SESSION['gn_choice'];
    $gn_comb = $_SESSION['gn_comb'];

    $check_query = "SELECT student_index_number FROM selection_form_table WHERE student_index_number = $current_index";

    if($q_return = mysqli_query($conn, $check_query)){
        if(mysqli_num_rows($q_return) > 0){
            $query = "UPDATE selection_form_table SET gn_choice_$gn_choice = '$gn_comb' WHERE student_index_number = $current_index"; 
        }
        else{
            $query = "INSERT INTO selection_form_table (gn_choice_$gn_choice, student_index_number) VALUES ('$gn_comb',$current_index)";
        }
    }

    if($q_return = mysqli_query($conn, $query)){
        $_SESSION['gn_choice'] ="";
        $_SESSION['gn_comb'] ="";
        header("Location:../sub_view.php");
    }

?>