<?php

require "../../config/config.php";

if(isset($_GET["q"]) && isset($_GET["choice"])){
    $jmajor_comb = $_GET["q"];
    $comb_choice = $_GET["choice"];

    // Initialzing Session variables
    $_SESSION["jm_comb"] = $jmajor_comb;
    $_SESSION["jm_choice"] = $comb_choice;

    echo "Choice: ".$comb_choice." <br />";
    // $jmajor_query = "SELECT jm_code,jm_major_1, jm_major_2 FROM jm_table WHERE jm_code = '$jmajor_comb'";
    $jmajor_query = "SELECT jm_comb_id, jm_comb_name, major_1_id, major_2_id FROM jm_combinations_table WHERE jm_comb_id = '$jmajor_comb'";
        if($q_return = mysqli_query($conn, $jmajor_query)){
            $jmajor_result = mysqli_fetch_assoc($q_return);
            echo "COMB ".$jmajor_result['jm_comb_id']."  ".$jmajor_result['jm_comb_name'];
        }
    $get_major_1_query = "SELECT major_name FROM jm_majors_table WHERE major_id = ". $jmajor_result['major_1_id'];
    $get_major_2_query = "SELECT major_name FROM jm_majors_table WHERE major_id = ". $jmajor_result['major_2_id'];
    $major_1_name = "";
    $major_2_name = "";
    if($q_return = mysqli_query($conn, $get_major_1_query)){
        $major_1_result = mysqli_fetch_assoc($q_return);
        $major_1_name = $major_1_result["major_name"];
    }

    if($q_return = mysqli_query($conn, $get_major_2_query)){
        $major_2_result = mysqli_fetch_assoc($q_return);
        $major_2_name = $major_2_result["major_name"];
    }
    $get_compulsory_modules_major_1_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM jm_compulsory_modules_table WHERE major_id = ".$jmajor_result['major_1_id'].")";
    $get_compulsory_modules_major_2_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM jm_compulsory_modules_table WHERE major_id = ".$jmajor_result['major_2_id'].")";

    $get_subsidairy_modules_major_1_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM jm_subsidairy_modules_table WHERE major_id = ".$jmajor_result['major_1_id'].")";
    $get_subsidairy_modules_major_2_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM jm_subsidairy_modules_table WHERE major_id = ".$jmajor_result['major_2_id'].")";

    // if($q_return = mysqli_query($conn, $get_compulsory_modules_major_1_query)){
    //     $major_1_compulsory_modules = mysqli_fetch_assoc[$q_return];
    // }

    // if($q_return = mysqli_query($conn, $get_compulsory_modules_major_2_query)){
    //     $major_2_compulsory_modules = mysqli_fetch_assoc[$q_return];
    // }
    $base_combination = $_SESSION['current_base_comb'];
    $current_image = $_SESSION['current_image'];
    $current_nic = $_SESSION['current_nic_number'];
    $current_st_name = $_SESSION['current_student_name'];
}
else{
    echo "Something went wrong";
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

<body class="subj-body" onload="get_credits_total()" onchange="get_credits_total()">
    <div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p>
                    <?php echo $_SESSION['current_student_name'] ?>
                </p>
                <div class="nav_btn_holder">
                    <span>
                        <?php echo $_SESSION['current_student_index'] ?>
                    </span>
                    <button onclick="location.href='../logout/logout.php'">LOGOUT</button>
                </div>
            </span>
            <?php
            echo "<img src = '../../assets/images/students/" . $_SESSION['current_image'] . "'>";
            ?>
        </div>
    </div>
    <img " alt="">
    <div class="subj-container">
        <div class="sem">
            <div class="header">Semester 1</div>
            <div class="main-div">
                <div class="subjects">
                    <div class="sub-header">Compulsory Subjects</div>
                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                        <div class="sub-colmn">Select</div>
                    </div>

                    <?php
                        // 
                        // Semester 1 Compulsory Modules Major 1
                        // 
                        $compulsory_credits_count_semseter_1 = 0;
                        if($q_return = mysqli_query($conn, $get_compulsory_modules_major_1_query)){
                            while($major_1_compulsory_modules = mysqli_fetch_assoc($q_return)){
                                if($major_1_compulsory_modules['module_semester'] == 1){
                                    $compulsory_credits_count_semseter_1 += $major_1_compulsory_modules['module_credits'];
                                    // echo "
                                    // <tr>
                                    //     <td>".$major_1_compulsory_modules['module_name']."</td>
                                    //     <td name = 'sem_1_comp_credits'>".$major_1_compulsory_modules['module_credits']."</td>
                                    //     <td><input type=\"checkbox\" checked disabled></td>
                                    // </tr>
                                    
                                    // ";
                                    echo '
                                    <div class="sub-row">
                                        <div class="cell">'.$major_1_compulsory_modules['module_name'].'</div>
                                        <div class="sub-cell">'.$major_1_compulsory_modules['module_credits'].'</div>
                                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked disabled></div>
                                    </div>
                                    ';
                                }
                            }
                        }
                        // 
                        // Semester 1 Compulsory Modules Major 2
                        // 
                        if($q_return = mysqli_query($conn, $get_compulsory_modules_major_2_query)){
                            while($major_2_compulsory_modules = mysqli_fetch_assoc($q_return)){
                                if($major_2_compulsory_modules['module_semester'] == 1){
                                    $compulsory_credits_count_semseter_1 += $major_2_compulsory_modules['module_credits'];
                                    echo "
                                    <tr>
                                        <td>".$major_2_compulsory_modules['module_name']."</td>
                                        <td name = 'sem_1_comp_credits'>".$major_2_compulsory_modules['module_credits']."</td>
                                        <td><input type=\"checkbox\" checked disabled></td>
                                    </tr>
                                    
                                    ";
                                }
                            }
                        }
                    ?>

                    <div class="sub-row">
                        <div class="cell">CMIS 3122 - Rapid Application Development</div>
                        <div class="sub-cell">2</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <!-- <div class="sub-row">
                        <div class="cell">CMIS 3114 - Data Communication & Comp. Networks</div>
                        <div class="sub-cell">4</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div> -->

                    <!-- <div class="sub-row">
                        <div class="cell">ELTN 3113 - Digital Electronics</div>
                        <div class="sub-cell">3</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div> -->

                    <!-- <div class="sub-row">
                        <div class="cell">ELTN 3121 - Digital Electronics - Lab</div>
                        <div class="sub-cell">1</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div> -->

                    <div class="total-row">
                        <div class="sub-colmn">Total Credits of Compulory</div>
                        <div class="sub-colmn">1</div>
                    </div>
                </div>
                <div class="subjects">
                    <div class="sub-header">Subsidairy Subjects</div>

                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                        <div class="sub-colmn">Select</div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">CMIS 3134 - Computer Architecture & Compiler Design</div>
                        <div class="sub-cell">4</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="total-row">
                        <div class="sub-colmn">Total Credits of Compulory</div>
                        <div class="sub-colmn">1</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="total-credits">
            <div class="sub-colmn">Total Credits of Semester 1</div>
            <div class="sub-colmn">14</div>
        </div>

        <div class="sem">
            <div class="header">Semester 2</div>
            <div class="main-div">
                <div class="subjects">
                    <div class="sub-header">Compulsory Subjects</div>
                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                        <div class="sub-colmn">Select</div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">CMIS 3122 - Rapid Application Development</div>
                        <div class="sub-cell">2</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">CMIS 3114 - Data Communication & Comp. Networks</div>
                        <div class="sub-cell">4</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">ELTN 3113 - Digital Electronics</div>
                        <div class="sub-cell">3</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">ELTN 3121 - Digital Electronics - Lab</div>
                        <div class="sub-cell">1</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="total-row">
                        <div class="sub-colmn">Total Credits of Compulory</div>
                        <div class="sub-colmn">1</div>
                    </div>
                </div>
                <div class="subjects">
                    <div class="sub-header">Subsidairy Subjects</div>

                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                        <div class="sub-colmn">Select</div>
                    </div>

                    <div class="sub-row">
                        <div class="cell">CMIS 3134 - Computer Architecture & Compiler Design</div>
                        <div class="sub-cell">4</div>
                        <div class="sub-cell"><input type="checkbox" class="rememberMeCheckbox" checked></div>
                    </div>

                    <div class="total-row">
                        <div class="sub-colmn">Total Credits of Compulory</div>
                        <div class="sub-colmn">1</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="total-credits">
            <div class="sub-colmn">Total Credits of Semester 2</div>
            <div class="sub-colmn">14</div>
        </div>

        <div class="total-credits-final">
            <div class="sub-colmn-total">Total Credits of Year</div>
            <div class="sub-colmn-total">14</div>
        </div>

        <button class="sub-btn" disabled>Submit</button>
    </div>

</body>

</html>