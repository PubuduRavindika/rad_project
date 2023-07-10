<?php
require "../config/config.php";

$base_combination = $_SESSION['current_base_comb'];
$current_image = $_SESSION['current_image'];
$current_nic = $_SESSION['current_nic_number'];
$current_st_name = $_SESSION['current_student_name'];
$current_index = $_SESSION['current_student_index'];

$sql = "SELECT * FROM selection_form_table WHERE student_index_number = $current_index";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0){
    header("Location:third_year_selection.php");
}



// $special_subjects = array();

// if(isset($_POST["special_option_1"])){
//     array_push($special_subjects, $_POST["special_option_1"]);
//     if(isset($_POST["special_option_2"])){
//         array_push($special_subjects, $_POST["special_option_2"]);
//         if(isset($_POST["special_option_3"])){
//             array_push($special_subjects, $_POST["special_option_3"]);
//         }
//     }
// }


// if(!($special_subjects == array_unique($special_subjects))){
//     echo "Invalid Choice, in Special Subjects";
//     header("Location:third_year_selection.php");
// }

// // 
// // Adding Special subjects to the session array
// // 
// if(empty($_SESSION['special_subjects']) || !isset($_SESSION['special_subjects'])){
//     $_SESSION['special_subjects'] = $special_subjects;
// }


// $jmajor_subjects = array();

// if(isset($_POST["jmajor_option_1"])){
//     array_push($jmajor_subjects, $_POST["jmajor_option_1"]);
//     if(isset($_POST["jmajor_option_2"])){
//         array_push($jmajor_subjects, $_POST["jmajor_option_2"]);
//         if(isset($_POST["jmajor_option_3"])){
//             array_push($jmajor_subjects, $_POST["jmajor_option_3"]);
//         }
//     }
// }
// // 
// // Adding Joint Major subjects to the session array
// // 
// if(empty($_SESSION['jmajor_subjects']) || !isset($_SESSION['jmajor_subjects'])){
//     $_SESSION['jmajor_subjects'] = $jmajor_subjects;
// }

// if(!($jmajor_subjects == array_unique($jmajor_subjects))){
//     echo "Invalid Choice, in Joint Major Subjects";
//     header("Location:third_year_selection.php");
// }


// $general_subjects = array();


// if(isset($_POST["general_option_1"])){
//     array_push($general_subjects, $_POST["general_option_1"]);
//     if(isset($_POST["general_option_2"])){
//         array_push($general_subjects, $_POST["general_option_2"]);
//         if(isset($_POST["general_option_3"])){
//             array_push($general_subjects, $_POST["general_option_3"]);
//         }
//     }
// }

// // 
// // Adding Special subjects to the session array
// // 
// if(empty($_SESSION['general_subjects']) || !isset($_SESSION['general_subjects'])){
//     $_SESSION['general_subjects'] = $general_subjects;
// }


// if(!($general_subjects == array_unique($general_subjects))){
//     echo "Invalid Choice, in General Subjects";
//     header("Location:third_year_selection.php");
// }





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
            <?php
            echo "<img src = '../assets/images/students/".$current_image."'style = 'width:180px'/>";
            echo "<p>" . $current_st_name. "</p>";
            echo "<p>" . $current_nic."</p>";
            ?>
        <form action="../logout/logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
        <?php
        // 
        // Printing Special subjects
        // 
        echo "<h4>Special Subjects</h4>";

        
        $get_sp_choices = "SELECT sp_choice_1, sp_choice_2, sp_choice_3 FROM selection_form_table WHERE student_index_number = $current_index";
        $sp_result = mysqli_query($conn,$get_sp_choices);

        // Application Data
        $get_sp_app = "SELECT sp_choice_1, sp_choice_2, sp_choice_3 FROM selection_application_table WHERE student_index_number = $current_index";
        $sp_application_result = mysqli_query($conn,$get_sp_app);

        if(mysqli_num_rows($sp_result) > 0){
            echo "<ol>";
            while($row = mysqli_fetch_assoc($sp_result)){
                if(!empty($row['sp_choice_1'])){
                    $sub_com = $row["sp_choice_1"];
                    $choice = 1;
                    $special_query = "SELECT sp_comb_id, sp_comb_name FROM sp_combinations_table WHERE sp_comb_id = '$sub_com'";
                    $name_results = mysqli_query($conn, $special_query);
                    if(mysqli_num_rows($name_results) > 0){
                        $comb_name = mysqli_fetch_assoc($name_results);
                        echo "<li><a href = 'special/sp_form.php?q=$sub_com&&choice=$choice'>". $comb_name['sp_comb_name'] . "</a></li>";
                    }
                }
                else{
                    echo "<p>Not Selected</p>";
                }

                if(!empty($row['sp_choice_2'])){
                    $sub_com = $row["sp_choice_2"];
                    $choice = 2;
                    $special_query = "SELECT sp_comb_id, sp_comb_name FROM sp_combinations_table WHERE sp_comb_id = '$sub_com'";
                    $name_results = mysqli_query($conn, $special_query);
                    if(mysqli_num_rows($name_results) > 0){
                        $comb_name = mysqli_fetch_assoc($name_results);
                        echo "<li><a href = 'special/sp_form.php?q=$sub_com&&choice=$choice'>". $comb_name['sp_comb_name'] . "</a></li>";
                    }
                }
                if(!empty($row['sp_choice_3'])){
                    $sub_com = $row["sp_choice_3"];
                    $choice = 3;
                    $special_query = "SELECT sp_comb_id, sp_comb_name FROM sp_combinations_table WHERE sp_comb_id = '$sub_com'";
                    $name_results = mysqli_query($conn, $special_query);
                    if(mysqli_num_rows($name_results) > 0){
                        $comb_name = mysqli_fetch_assoc($name_results);
                        echo "<li><a href = 'special/sp_form.php?q=$sub_com&&choice=$choice'>". $comb_name['sp_comb_name'] . "</a></li>";
                    }
                }
            }
            echo "</ol>";
        }


            // 
            // Printing Joint Major subjects
            // 

            echo "<h4>Joint Major Subjects</h4>";

            $get_jm_choices = "SELECT jm_choice_1, jm_choice_2, jm_choice_3 FROM selection_form_table WHERE student_index_number = $current_index";
            $jm_result = mysqli_query($conn,$get_jm_choices);

            // Application Data
            $get_jm_app = "SELECT jm_choice_1, jm_choice_2, jm_choice_3 FROM selection_application_table WHERE student_index_number = $current_index";
            $jm_application_result = mysqli_query($conn,$get_jm_app);

            if(mysqli_num_rows($jm_result) > 0){
                echo "<ol>";
                $app_row = array();
                $app_row = mysqli_fetch_assoc($jm_application_result);
                while($row = mysqli_fetch_assoc($jm_result)){
                    if(!empty($row['jm_choice_1'])){
                        $sub_com = $row["jm_choice_1"];
                        $choice = 1;
                        $status = "";

                        // Application
                        if(mysqli_num_rows($jm_application_result) > 0){
                            // while($app_row = mysqli_fetch_assoc($jm_application_result)){
                                if(!empty($app_row['jm_choice_1'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        }

                        $jmajor_query = "SELECT jm_comb_id, jm_comb_name FROM jm_combinations_table WHERE jm_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $jmajor_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'joint_major/jm_form.php?q=$sub_com&&choice=$choice'>". $comb_name['jm_comb_name'] . "</a>".$status."</li>";

                        }
                    }
                    else{
                        echo "<p>Not Selected</p>";                        
                    }

                    if(!empty($row['jm_choice_2'])){
                        $sub_com = $row["jm_choice_2"];
                        $choice = 2;

                        // Application
                        $status = "";
                        if(mysqli_num_rows($jm_application_result) > 0){
                            // while($app_row = mysqli_fetch_assoc($jm_application_result)){
                                if(!empty($app_row['jm_choice_2'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        } 

                        $jmajor_query = "SELECT jm_comb_id, jm_comb_name FROM jm_combinations_table WHERE jm_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $jmajor_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'joint_major/jm_form.php?q=$sub_com&&choice=$choice'>". $comb_name['jm_comb_name'] . "</a>".$status."</li>";
                        }
                    }
                    if(!empty($row['jm_choice_3'])){
                        $sub_com = $row["jm_choice_3"];
                        $choice = 3;

                        // Application
                        $status = "";
                        if(mysqli_num_rows($jm_application_result) > 0){
                            // while($app_row = mysqli_fetch_assoc($jm_application_result)){
                                if(!empty($app_row['jm_choice_3'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        } 

                        $jmajor_query = "SELECT jm_comb_id, jm_comb_name FROM jm_combinations_table WHERE jm_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $jmajor_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'joint_major/jm_form.php?q=$sub_com&&choice=$choice'>". $comb_name['jm_comb_name'] . "</a>".$status."</li>";
                        }
                    }
                }
                echo "</ol>";
            }


            // 
            // Printing General subjects
            // 

            echo "<h4>General Subjects</h4>";

            $get_gn_choices = "SELECT gn_choice_1, gn_choice_2, gn_choice_3 FROM selection_form_table WHERE student_index_number = $current_index";
            $gn_result = mysqli_query($conn,$get_gn_choices);

            // Application Data
            $get_gn_app = "SELECT gn_choice_1, gn_choice_2, gn_choice_3 FROM selection_application_table WHERE student_index_number = $current_index";
            $gn_application_result = mysqli_query($conn,$get_gn_app);

            
            if(mysqli_num_rows($gn_result) > 0){
                $app_row = array();
                echo "<ol>";
                $app_row = mysqli_fetch_assoc($gn_application_result);
                while($row = mysqli_fetch_assoc($gn_result)){
                    if(!empty($row['gn_choice_1'])){
                        $sub_com = $row["gn_choice_1"];
                        $choice = 1;

                        // Application
                        $status = "";
                        if(mysqli_num_rows($gn_application_result) > 0){
                            // while($app_row = mysqli_fetch_assoc($gn_application_result)){
                                if(!empty($app_row['gn_choice_1'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        }
                        
                        
                        $general_query = "SELECT gn_comb_id, gn_comb_name FROM gn_combinations_table WHERE gn_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $general_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'general/gn_form.php?q=$sub_com&&choice=$choice'>". $comb_name['gn_comb_name'] . "</a>".$status."</li>";
                        }
                    }
                    else {
                        echo "<p>Not Selected</p>";
                    }
                    if(!empty($row['gn_choice_2'])){
                        $sub_com = $row["gn_choice_2"];
                        $choice = 2;

                        // Application
                        $status = "";
                        if(mysqli_num_rows($gn_application_result) > 0){
                            // while($app_row = mysqli_fetch_assoc($gn_application_result)){
                                if(!empty($app_row['gn_choice_2'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        }


                        $general_query = "SELECT gn_comb_id, gn_comb_name FROM gn_combinations_table WHERE gn_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $general_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'general/gn_form.php?q=$sub_com&&choice=$choice'>". $comb_name['gn_comb_name'] . "</a>".$status."</li>";
                        }
                    }
                    if(!empty($row['gn_choice_3'])){
                        $sub_com = $row["gn_choice_3"];
                        $choice = 3;

                        // Application
                        $status = "";
                        if(mysqli_num_rows($gn_application_result) > 0){
                            
                            // while($app_row = mysqli_fetch_assoc($gn_application_result)){
                                if(!empty($app_row['gn_choice_3'])){
                                    $status = " - Filled - DONE";
                                }
                                else {
                                    $status = " - Not Filled";
                                }
                            // }
                        }
                        else{
                            $status = " - Not Filled";
                        }

                        $general_query = "SELECT gn_comb_id, gn_comb_name FROM gn_combinations_table WHERE gn_comb_id = '$sub_com'";
                        $name_results = mysqli_query($conn, $general_query);
                        if(mysqli_num_rows($name_results) > 0){
                            $comb_name = mysqli_fetch_assoc($name_results);
                            echo "<li><a href = 'general/gn_form.php?q=$sub_com&&choice=$choice'>". $comb_name['gn_comb_name'] . "</a>".$status."</li>";
                        }
                    }
                }
                echo "</ol>";
            }
            
        ?>
    </div>
    <form action="clear_all.php" method="POST">
        <input type="submit" value="Clear All" onclick="return confirm('Do you want to clear all the following data? Press OK to continue.')">
    </form>
</body>
</html>