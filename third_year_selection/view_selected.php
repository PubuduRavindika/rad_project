<?php

require "../config/config.php";

$current_index = $_SESSION['current_student_index'];

$special_subjects = array();

// if(!($special_subjects == array_unique($special_subjects))){
//     echo "Invalid Choice, in Special Subjects";
//     // header("Location:third_year_selection.php");
// }

$jmajor_subjects = array();

$columns = "";
$values = "";

if(isset($_POST["jmajor_option_1"])){
    array_push($jmajor_subjects, $_POST["jmajor_option_1"]);
    $columns = $columns .", jm_choice_1";
    $values = $values .", ". $_POST["jmajor_option_1"];
    if(isset($_POST["jmajor_option_2"])){
        array_push($jmajor_subjects, $_POST["jmajor_option_2"]);
        $columns = $columns .", jm_choice_2";
        $values = $values .", ". $_POST["jmajor_option_2"];
        if(isset($_POST["jmajor_option_3"])){
            array_push($jmajor_subjects, $_POST["jmajor_option_3"]);
            $columns = $columns .", jm_choice_3";
            $values = $values .", ". $_POST["jmajor_option_3"];
        }
    }
}
echo "<pre>";
print_r($jmajor_subjects);
echo "</pre>";

// if(!($jmajor_subjects == array_unique($jmajor_subjects))){
//     echo "Invalid Choice, in Joint Major Subjects";
//     // header("Location:third_year_selection.php");
// }

$general_subjects = array();

if(isset($_POST["general_option_1"])){
    array_push($general_subjects, $_POST["general_option_1"]);
    $columns = $columns .", gn_choice_1";
    $values = $values .", ". $_POST["general_option_1"];
    if(isset($_POST["general_option_2"])){
        array_push($general_subjects, $_POST["general_option_2"]);
        $columns = $columns . ", gn_choice_2";
        $values = $values .", ". $_POST["general_option_2"];
        if(isset($_POST["general_option_3"])){
            array_push($general_subjects, $_POST["general_option_3"]);
            $columns = $columns . ", gn_choice_3";
            $values = $values .", ". $_POST["general_option_3"];
        }
    }
}

echo "<pre>";
print_r($general_subjects);
echo "</pre>";

// if(!($general_subjects == array_unique($general_subjects))){
//     echo "Invalid Choice, in General Subjects";
//     // header("Location:third_year_selection.php");
// }

$general_query = "INSERT INTO selection_form_table (student_index_number".$columns.") VALUES (".$current_index.$values.")";
echo $general_query;

if($special_subjects == array_unique($special_subjects)){
    if($jmajor_subjects == array_unique($jmajor_subjects)){
        if($general_subjects == array_unique($general_subjects)){
            if(mysqli_query($conn, $general_query)){
                echo "Done";
                header("Location:sub_view.php");
            }
        }
        else {
            // echo "Invalid Choice, in General Subjects";
            header("Location:third_year_selection.php?error=1");
        }
    }
    else {
        // echo "Invalid Choice, in Joint Major Subjects";
        header("Location:third_year_selection.php?error=1");
    }
}
else{
    // echo "Invalid Choice, in Special Subjects";
    header("Location:third_year_selection.php?error=1");
}

// if(mysqli_query($conn, $general_query)){
//     echo "Done";
// }
// header("Location:sub_view.php");

?>