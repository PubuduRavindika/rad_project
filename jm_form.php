<?php

require_once("config.php");

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "get_credits_total()" onchange = "get_credits_total()">
    <div>
        <?php
            echo "<img src = 'images/students/".$current_image."'style = 'width:180px'/>";
            echo "<p>" . $current_st_name. "</p>";
            echo "<p>" . $current_nic."</p>";
        ?>
        <form action="logout.php" method="POST">
            <input type="submit" value="Logout">
        </form>
    </div>
    <!-- Semester 1 -->
    <!-- Semester 1 -->
    <!-- Semester 1 -->
    <h3>Semester 1</h3>
    <!-- Semester 1 Compulsory Modules -->
    <!-- Semester 1 Compulsory Modules -->
    <h4>Compulsory Subjects</h4>
    <table>
        <tr>
            <th>Module Name</th>
            <th>Credits</th>
            <th>Select</th>
        </tr>
        <?php
        // 
        // Semester 1 Compulsory Modules Major 1
        // 
        $compulsory_credits_count_semseter_1 = 0;
        if($q_return = mysqli_query($conn, $get_compulsory_modules_major_1_query)){
            while($major_1_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($major_1_compulsory_modules['module_semester'] == 1){
                    $compulsory_credits_count_semseter_1 += $major_1_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$major_1_compulsory_modules['module_name']."</td>
                        <td name = 'sem_1_comp_credits'>".$major_1_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
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
    <tr>
        <td>Total Credits of Compulory: </td>
        <td></td>
        <!-- Count from database table -->
        <!-- <td>
            <?php //echo $compulsory_credits_count_semseter_1?>
        </td> -->
        <td><span id = "compulsory_credits_count_semseter_1"></span></td>
    </tr>
    </table>
    <!-- Semester 1 subsidairy Modules -->
    <!-- Semester 1 subsidairy Modules -->
    <!-- Semester 1 subsidairy Modules -->
    <h4>subsidairy Subjects</h4>
    <table>
        <tr>
            <th>Module Name</th>
            <th>Credits</th>
            <th>Select</th>
        </tr>
    <?php
        // 
        // Semester 1 subsidairy Modules Major 1
        // 
        $sem_1_subs_count = 0;
        if($q_return = mysqli_query($conn, $get_subsidairy_modules_major_1_query)){
            while($major_1_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($major_1_subsidairy_modules['module_semester'] == 1){
                    $sem_1_subs_count++;
                    echo "
                    <tr>
                        <td>".$major_1_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_1_subs_credits\" id = \"sem_1_subs_credits_".$sem_1_subs_count."\">".$major_1_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_1_subs_input_".$sem_1_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }
        // 
        // Semester 1 subsidairy Modules Major 2
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_major_2_query)){
            while($major_2_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($major_2_subsidairy_modules['module_semester'] == 1){
                    $sem_1_subs_count++;
                    echo "
                    <tr>
                        <td>".$major_2_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_1_subs_credits\" id = \"sem_1_subs_credits_".$sem_1_subs_count."\">".$major_2_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_1_subs_input_".$sem_1_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }
        ?>
        <tr>
            <td>Total Credits of Optional: </td>
            <td></td>
            <td><span id = "semester_1_total_optional_count"></span></td>
        </tr>

        <tr>
            <td><strong>Total Credits of Semester: </strong></td>
            <td></td>
            <td><span id = "semester_1_total_credits_count"></span></td>
        </tr>
    </table>

    <!-- Semester 2 -->
    <!-- Semester 2 -->
    <!-- Semester 2 -->
    <h3>Semester 2</h3>
    <!-- Semester 2 Compulsory Modules -->
    <!-- Semester 2 Compulsory Modules -->
    <!-- Semester 2 Compulsory Modules -->
    <h4>Compulsory Subjects</h4>
    <table>
        <tr>
            <th>Module Name</th>
            <th>Credits</th>
            <th>Select</th>
        </tr>
        <?php
        $compulsory_credits_count_semseter_2 = 0;
        // 
        // Semester 2 Compulsory Modules Major 1
        //
        
        if($q_return = mysqli_query($conn, $get_compulsory_modules_major_1_query)){
            while($major_1_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($major_1_compulsory_modules['module_semester'] == 2){
                    $compulsory_credits_count_semseter_2 += $major_1_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$major_1_compulsory_modules['module_name']."</td>
                        <td name = 'sem_2_comp_credits'>".$major_1_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }
        // 
        // Semester 2 Compulsory Modules Major 2
        // 
        if($q_return = mysqli_query($conn, $get_compulsory_modules_major_2_query)){
            while($major_2_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($major_2_compulsory_modules['module_semester'] == 2){
                    $compulsory_credits_count_semseter_2 += $major_2_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$major_2_compulsory_modules['module_name']."</td>
                        <td name = 'sem_2_comp_credits'>".$major_2_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }
        ?>
        <tr>
            <td>Total Credits of Compulsory: </td>
            <td></td>
            <!-- Count from database table -->
            <!-- <td>
                <?php //echo $compulsory_credits_count_semseter_2?>
            </td> -->
            <td><span id = "compulsory_credits_count_semseter_2">0</span></td>
        </tr>
        
    </table>
    <!-- Semester 2 subsidairy Modules -->
    <!-- Semester 2 subsidairy Modules -->
    <!-- Semester 2 subsidairy Modules -->
    <h4>subsidairy Subjects</h4>
    <table>
        <tr>
            <th>Module Name</th>
            <th>Credits</th>
            <th>Select</th>
        </tr>
    <?php
    // 
    // Semester 2 subsidairy Modules Major 1
    // 
        $sem_2_subs_count = 0;
        if($q_return = mysqli_query($conn, $get_subsidairy_modules_major_1_query)){
            while($major_1_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($major_1_subsidairy_modules['module_semester'] == 2){
                    $sem_2_subs_count++;
                    echo "
                    <tr>
                        <td>".$major_1_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_2_subs_credits\" id = \"sem_2_subs_credits_".$sem_2_subs_count."\">".$major_1_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_2_subs_input_".$sem_2_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 2 subsidairy Modules Major 2
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_major_2_query)){
            while($major_2_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($major_2_subsidairy_modules['module_semester'] == 2){
                    $sem_2_subs_count++;
                    echo "
                    <tr>
                        <td>".$major_2_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_2_subs_credits\" id = \"sem_2_subs_credits_".$sem_2_subs_count."\">".$major_2_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_2_subs_input_".$sem_2_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }
        ?>
        <tr>
            <td>Total Credits of Optional: </td>
            <td></td>
            <td><span id = "semester_2_total_optional_count"></td>
        </tr>
        <tr>
            <td><strong>Total Credits of Semester: </strong></td>
            <td></td>
            <td><span id = "semester_2_total_credits_count"></span></td>
        </tr>
        <tr>
            <td><strong>Total Credits of Year: </strong></td>
            <td></td>
            <td><span id = "year_total_credits_count"></span></td>
        </tr>
    </table>
    <form action="jm_form_adder.php">
        <input type="submit" value = "Submit" id = "btn_submit" disabled>
    </form>
    <script src = "script.js"></script>
</body>
</html>