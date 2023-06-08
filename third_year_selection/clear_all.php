<?php
    require "../config/config.php";
    
    if(!isset($_SESSION["current_student_id"])){
        header("Location:../login/login.php?result=Please Login First");
    }

    $index_number = $_SESSION['current_student_index'];

    $sql = "DELETE FROM selection_form_table WHERE student_index_number = $index_number ";

    $dlt_app_sql = "DELETE FROM selection_application_table WHERE student_index_number = $index_number ";

    if(mysqli_query($conn, $sql) && mysqli_query($conn, $dlt_app_sql)) {
        header("Location:third_year_selection.php");
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
