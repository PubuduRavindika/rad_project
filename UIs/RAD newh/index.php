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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="select-body">
    <div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p><?php echo $_SESSION['current_student_name'] ?></p>
                <div class="nav_btn_holder">
                    <span><?php echo $_SESSION['current_student_index'] ?></span>
                    <button onclick="location.href='../logout/logout.php'">LOGOUT</button>
                </div>
            </span>
            <?php
            echo "<img src = '../assets/images/students/" . $_SESSION['current_image']. "'>";
            ?>
        </div>
    </div>

    <div class="select-container">
        <div class="header-row">
            <div class="div-colomn">
                <div class="header">Special Subjects</div>
                <div class="select-com">
                    <button class="select-button">1.COMB: 1A</button>
                    <div class="status-notfilled">Not Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">2.COMB: 1A</button>
                    <div class="status-filled">Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">3.COMB: 1A</button>
                    <div class="status-notfilled">Not Filled</div>
                </div>
            </div>
            <!-- Joint Major Subjects -->
            <!-- Joint Major Subjects -->
            <!-- Joint Major Subjects -->


            <?php
            
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

                            echo '
                            <div class="select-com">
                                <button onclick = "location.href = \'joint_major/jm_form.php?q='.$sub_com.'&&choice='.$choice.'\'" class="select-button">'. $comb_name['jm_comb_name'] .'</button>
                                <div class="status-notfilled">'.$status.'</div>
                            </div>
                            ';
                        }
                    }
                }
                echo "</ol>";
            }

            
            ?>





            <div class="div-colomn">
                <div class="header">Joint Major Subjects</div>
                <div class="select-com">
                    <button class="select-button">1.COMB: 1A</button>
                    <div class="status-notfilled">Not Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">2.COMB: 1A</button>
                    <div class="status-filled">Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">3.COMB: 1A</button>
                    <div class="status-notfilled">Not Filled</div>
                </div>
            </div>
            <!-- General Subjects -->
            <!-- General Subjects -->
            <!-- General Subjects -->
            <div class="div-colomn">
                <div class="header">General Subjects</div>
                <div class="select-com">
                    <button class="select-button">1.COMB: 1A</button>
                    <div class="status-notfilled">Not Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">2.COMB: 1A</button>
                    <div class="status-filled">Filled</div>
                </div>

                <div class="select-com">
                    <button class="select-button">3.COMB: 1A</button>
                    <div class="status-filled">Filled</div>
                </div>
            </div>
        </div>

        <div class="footer-row">
            <button class="sub-btn">Clear</button>
            <button class="sub-btn">Submit</button>
        </div>

    </div>
    
</body>
</html>