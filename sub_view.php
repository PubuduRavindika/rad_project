<?php
require_once("config.php");
$base_combination = $_SESSION['current_base_comb'];
$current_image = $_SESSION['current_image'];
$current_nic = $_SESSION['current_nic_number'];
$current_st_name = $_SESSION['current_student_name'];
$current_index = $_SESSION['current_student_index'];

$special_subjects = array();

if(isset($_POST["special_option_1"])){
    array_push($special_subjects, $_POST["special_option_1"]);
    if(isset($_POST["special_option_2"])){
        array_push($special_subjects, $_POST["special_option_2"]);
        if(isset($_POST["special_option_3"])){
            array_push($special_subjects, $_POST["special_option_3"]);
        }
    }
}


if(!($special_subjects == array_unique($special_subjects))){
    echo "Invalid Choice, in Special Subjects";
    header("Location:third_year_selection.php");
}

// 
// Adding Special subjects to the session array
// 
if(empty($_SESSION['special_subjects']) || !isset($_SESSION['special_subjects'])){
    $_SESSION['special_subjects'] = $special_subjects;
}


$jmajor_subjects = array();

if(isset($_POST["jmajor_option_1"])){
    array_push($jmajor_subjects, $_POST["jmajor_option_1"]);
    if(isset($_POST["jmajor_option_2"])){
        array_push($jmajor_subjects, $_POST["jmajor_option_2"]);
        if(isset($_POST["jmajor_option_3"])){
            array_push($jmajor_subjects, $_POST["jmajor_option_3"]);
        }
    }
}
// 
// Adding Joint Major subjects to the session array
// 
if(empty($_SESSION['jmajor_subjects']) || !isset($_SESSION['jmajor_subjects'])){
    $_SESSION['jmajor_subjects'] = $jmajor_subjects;
}

if(!($jmajor_subjects == array_unique($jmajor_subjects))){
    echo "Invalid Choice, in Joint Major Subjects";
    header("Location:third_year_selection.php");
}


$general_subjects = array();

if(isset($_POST["general_option_1"])){
    array_push($general_subjects, $_POST["general_option_1"]);
    if(isset($_POST["general_option_2"])){
        array_push($general_subjects, $_POST["general_option_2"]);
        if(isset($_POST["general_option_3"])){
            array_push($general_subjects, $_POST["general_option_3"]);
        }
    }
}

// 
// Adding Special subjects to the session array
// 
if(empty($_SESSION['general_subjects']) || !isset($_SESSION['general_subjects'])){
    $_SESSION['general_subjects'] = $general_subjects;
}


if(!($general_subjects == array_unique($general_subjects))){
    echo "Invalid Choice, in General Subjects";
    header("Location:third_year_selection.php");
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
            <?php
            echo "<img src = 'images/students/".$current_image."'style = 'width:180px'/>";
            echo "<p>" . $current_st_name. "</p>";
            echo "<p>" . $current_nic."</p>";
            ?>
        <form action="logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
        <?php
        // 
        // Printing Special subjects
        // 
        echo "<h4>Special Subjects</h4>";

        if(empty($_SESSION['special_subjects'])){
            echo "<p>Not Selected</p>";
        }
        else{
            // echo "<ol>";
            // $sp_choice = 1;
            // foreach($_SESSION['special_subjects'] as $special_subject){
            //     echo "<li><a href= \"sp_form.php?q=$special_subject&&choice=$sp_choice\">";
            //     $special_query = "SELECT sp_subject FROM sp_table WHERE sp_id = '$special_subject'";
            //     if($q_return = mysqli_query($conn, $special_query)){
            //         $special_result = mysqli_fetch_assoc($q_return);
            //         echo "Subject: ".$special_result['sp_subject']."</a></li>";
                    
            //         $submission_check_query = "SELECT sp_choice_$sp_choice FROM selection_form_table WHERE student_id = $current_index";
            //         if($q_return = mysqli_query($conn, $submission_check_query)){
            //             $submission_result = mysqli_fetch_assoc($q_return);
            //             if($submission_result['sp_choice_'.$sp_choice] == $special_subject){
            //                 echo "<span> - DONE - </span>";
            //             }
            //         }
            //     }
            //     $sp_choice++;
            // }
            // echo "</ol>";
            echo "<p>Under developments</p>";
}


            // 
            // Printing Joint Major subjects
            // 

            echo "<h4>Joint Major Subjects</h4>";
            if(empty($_SESSION['jmajor_subjects'])){
                echo "<p>Not Selected</p>";
            }
            else {
                echo "<ol>";
                $jm_choice = 1;
                foreach($_SESSION['jmajor_subjects'] as $jmajor_subject){
                    echo "<li><a href= \"jm_form.php?q=$jmajor_subject&&choice=$jm_choice\">";
                    $jmajor_query = "SELECT jm_comb_id, jm_comb_name FROM jm_combinations_table WHERE jm_comb_id = '$jmajor_subject'";
                    if($q_return = mysqli_query($conn, $jmajor_query)){
                        $jmajor_result = mysqli_fetch_assoc($q_return);
                        echo $jmajor_result['jm_comb_name']."</a></li>"; 

                        $submission_check_query = "SELECT jm_choice_$jm_choice FROM selection_form_table WHERE student_id = $current_index";
                        if($q_return = mysqli_query($conn, $submission_check_query)){
                            if(mysqli_num_rows($q_return) > 0){
                                $submission_result = mysqli_fetch_assoc($q_return);
                                if($submission_result['jm_choice_'.$jm_choice] == $jmajor_subject){
                                    echo "<span> - DONE - </span>";
                                }
                            }
                        }
                    }
                    $jm_choice++;
                }
                echo "</ol>";
            }

            // 
            // Printing Joint Major subjects
            // 

            echo "<h4>General Subjects</h4>";

            if(empty($_SESSION['general_subjects'])){
                echo "<p>Not Selected</p>";
            }
            else{
                echo "<ol>";
                $gn_choice = 1;
                foreach($_SESSION['general_subjects'] as $general_subject){
                    echo "<li><a href= \"gn_form.php?q=$general_subject&&choice=$gn_choice\">";
                    $general_query = "SELECT gn_comb_id, gn_comb_name FROM gn_combinations_table WHERE gn_comb_id = '$general_subject'";
                    if($q_return = mysqli_query($conn, $general_query)){
                        $general_result = mysqli_fetch_assoc($q_return);
                        echo $general_result['gn_comb_name']."</a></li>";
                        
                        $submission_check_query = "SELECT gn_choice_$gn_choice FROM selection_form_table WHERE student_id = $current_index";
                        if($q_return = mysqli_query($conn, $submission_check_query)){
                            if(mysqli_num_rows($q_return) > 0){
                                $submission_result = mysqli_fetch_assoc($q_return);
                                if($submission_result['gn_choice_'.$gn_choice] == $general_subject){
                                    echo "<span> - DONE - </span>";
                                }
                            }
                        }
                    }
                    $gn_choice++;
                }
                echo "</ol>";
            }
        ?>
    </div>
</body>
</html>