<?php

require_once '../../config/config.php';

$comb_id = $_GET['comb'];
$choice = $_GET['choice'];
$student_id = $_SESSION["current_student_id"];
$student_index = $_SESSION["current_student_index"];

$modules = $_POST['subs_modules'];

$num_modules = count($modules);


for($i = 0; $i < $num_modules;$i++){
}

$create_application =  "INSERT INTO jm_application_table (student_id, comb_id) VALUES ('$student_id', '$comb_id')";

if(mysqli_query($conn, $create_application)){
    $get_app_id = "SELECT app_id FROM jm_application_table WHERE student_id = '$student_id' and comb_id = '$comb_id'";

    $result = mysqli_query($conn,$get_app_id);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $app_id = $row['app_id'];

        $insert_modules = "INSERT INTO jm_application_module_table (app_id, module_id) VALUES ";

        $str = "(".$app_id.", ".$modules[0].")";
        for($i = 1; $i < $num_modules;$i++){
            $str .= ", (".$app_id.", ".$modules[$i].")";
        }

        $insert_modules = $insert_modules.$str;
        
        if(mysqli_query($conn, $insert_modules)){
            $check_query = "SELECT * FROM selection_application_table WHERE student_index_number = '$student_index'";
            $result_1 = mysqli_query($conn, $check_query);
            if(mysqli_num_rows($result_1) > 0){
                $update_table = "UPDATE selection_application_table SET jm_choice_$choice = $app_id WHERE student_index_number = '$student_index'";
            }
            else {
                $update_table = "INSERT INTO selection_application_table (student_index_number ,jm_choice_$choice) VALUES ('$student_index','$app_id')";
            }

            echo $update_table;

            if(mysqli_query($conn, $update_table)){
                header("location:../sub_view.php");
            }
        }
    }
}

?>