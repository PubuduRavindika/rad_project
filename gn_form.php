<?php

require_once("config.php");

if(isset($_GET["q"]) && isset($_GET["choice"])){
    $general_comb = $_GET["q"];
    $comb_choice = $_GET["choice"];
    echo "Choice: ".$comb_choice." <br />";
    // $general_query = "SELECT gn_code,gn_gn_sub_1, gn_gn_sub_2 FROM gn_table WHERE gn_code = '$general_comb'";
    $general_query = "SELECT gn_comb_id, gn_comb_name, gn_sub_1_id, gn_sub_2_id, gn_sub_3_id FROM gn_combinations_table WHERE gn_comb_id = '$general_comb'";
        if($q_return = mysqli_query($conn, $general_query)){
            $general_result = mysqli_fetch_assoc($q_return);
            echo "COMB ".$general_result['gn_comb_id']."  ".$general_result['gn_comb_name'];
        }
    $get_gn_sub_1_query = "SELECT gn_sub_name FROM gn_subjects_table WHERE gn_sub_id = ". $general_result['gn_sub_1_id'];
    $get_gn_sub_2_query = "SELECT gn_sub_name FROM gn_subjects_table WHERE gn_sub_id = ". $general_result['gn_sub_2_id'];
    $get_gn_sub_3_query = "SELECT gn_sub_name FROM gn_subjects_table WHERE gn_sub_id = ". $general_result['gn_sub_3_id'];
    $gn_sub_1_name = "";
    $gn_sub_2_name = "";
    $gn_sub_3_name = "";
    if($q_return = mysqli_query($conn, $get_gn_sub_1_query)){
        $gn_sub_1_result = mysqli_fetch_assoc($q_return);
        $gn_sub_1_name = $gn_sub_1_result["gn_sub_name"];
    }

    if($q_return = mysqli_query($conn, $get_gn_sub_2_query)){
        $gn_sub_2_result = mysqli_fetch_assoc($q_return);
        $gn_sub_2_name = $gn_sub_2_result["gn_sub_name"];
    }
    if($q_return = mysqli_query($conn, $get_gn_sub_3_query)){
        $gn_sub_3_result = mysqli_fetch_assoc($q_return);
        $gn_sub_3_name = $gn_sub_3_result["gn_sub_name"];
    }
    $get_compulsory_modules_gn_sub_1_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_compulsory_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_1_id'].")";
    $get_compulsory_modules_gn_sub_2_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_compulsory_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_2_id'].")";
    $get_compulsory_modules_gn_sub_3_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_compulsory_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_3_id'].")";

    $get_subsidairy_modules_gn_sub_1_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_subsidairy_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_1_id'].")";
    $get_subsidairy_modules_gn_sub_2_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_subsidairy_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_2_id'].")";
    $get_subsidairy_modules_gn_sub_3_query = "SELECT * FROM modules_table WHERE module_id IN (SELECT module_id FROM gn_subsidairy_modules_table WHERE gn_sub_id = ".$general_result['gn_sub_3_id'].")";

    // if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_1_query)){
    //     $gn_sub_1_compulsory_modules = mysqli_fetch_assoc[$q_return];
    // }

    // if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_2_query)){
    //     $gn_sub_2_compulsory_modules = mysqli_fetch_assoc[$q_return];
    // }
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
    <form action="gn_form_adder.php" method = "POST">
        <input type="checkbox" name="choice" id="choice" value = "<?php echo $comb_choice;?>" checked >
        <input type="checkbox" name="comb" id="comb" value = "<?php echo $general_comb;?>" checked >
        <input type="submit" value = "Submit"> 
    </form>

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
        // Semester 1 Compulsory Modules Subject 1
        // 
        $compulsory_credits_count_semseter_1 = 0;
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_1_query)){
            while($gn_sub_1_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_1_compulsory_modules['module_semester'] == 1){
                    $compulsory_credits_count_semseter_1 += $gn_sub_1_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_1_compulsory_modules['module_name']."</td>
                        <td name = 'sem_1_comp_credits'>".$gn_sub_1_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }
        // 
        // Semester 1 Compulsory Modules Subject 2
        // 
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_2_query)){
            while($gn_sub_2_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_2_compulsory_modules['module_semester'] == 1){
                    $compulsory_credits_count_semseter_1 += $gn_sub_2_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_2_compulsory_modules['module_name']."</td>
                        <td name = 'sem_1_comp_credits'>".$gn_sub_2_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 1 Compulsory Modules Subject 3
        // 
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_3_query)){
            while($gn_sub_3_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_3_compulsory_modules['module_semester'] == 1){
                    $compulsory_credits_count_semseter_1 += $gn_sub_3_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_3_compulsory_modules['module_name']."</td>
                        <td name = 'sem_1_comp_credits'>".$gn_sub_3_compulsory_modules['module_credits']."</td>
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
        // Semester 1 subsidairy Modules Subject 1
        // 
        $sem_1_subs_count = 0;
        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_1_query)){
            while($gn_sub_1_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_1_subsidairy_modules['module_semester'] == 1){
                    $sem_1_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_1_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_1_subs_credits\" id = \"sem_1_subs_credits_".$sem_1_subs_count."\">".$gn_sub_1_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_1_subs_input_".$sem_1_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }
        // 
        // Semester 1 subsidairy Modules Subject 2
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_2_query)){
            while($gn_sub_2_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_2_subsidairy_modules['module_semester'] == 1){
                    $sem_1_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_2_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_1_subs_credits\" id = \"sem_1_subs_credits_".$sem_1_subs_count."\">".$gn_sub_2_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_1_subs_input_".$sem_1_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 1 subsidairy Modules Subject 2
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_3_query)){
            while($gn_sub_3_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_3_subsidairy_modules['module_semester'] == 1){
                    $sem_1_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_3_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_1_subs_credits\" id = \"sem_1_subs_credits_".$sem_1_subs_count."\">".$gn_sub_3_subsidairy_modules['module_credits']."</td>
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
        // Semester 2 Compulsory Modules Subject 1
        //
        
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_1_query)){
            while($gn_sub_1_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_1_compulsory_modules['module_semester'] == 2){
                    $compulsory_credits_count_semseter_2 += $gn_sub_1_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_1_compulsory_modules['module_name']."</td>
                        <td name = 'sem_2_comp_credits'>".$gn_sub_1_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }
        // 
        // Semester 2 Compulsory Modules Subject 2
        // 
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_2_query)){
            while($gn_sub_2_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_2_compulsory_modules['module_semester'] == 2){
                    $compulsory_credits_count_semseter_2 += $gn_sub_2_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_2_compulsory_modules['module_name']."</td>
                        <td name = 'sem_2_comp_credits'>".$gn_sub_2_compulsory_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" checked disabled></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 2 Compulsory Modules Subject 3
        // 
        if($q_return = mysqli_query($conn, $get_compulsory_modules_gn_sub_3_query)){
            while($gn_sub_3_compulsory_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_3_compulsory_modules['module_semester'] == 2){
                    $compulsory_credits_count_semseter_2 += $gn_sub_3_compulsory_modules['module_credits'];
                    echo "
                    <tr>
                        <td>".$gn_sub_3_compulsory_modules['module_name']."</td>
                        <td name = 'sem_2_comp_credits'>".$gn_sub_3_compulsory_modules['module_credits']."</td>
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
    // Semester 2 subsidairy Modules Subject 1
    // 
        $sem_2_subs_count = 0;
        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_1_query)){
            while($gn_sub_1_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_1_subsidairy_modules['module_semester'] == 2){
                    $sem_2_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_1_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_2_subs_credits\" id = \"sem_2_subs_credits_".$sem_2_subs_count."\">".$gn_sub_1_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_2_subs_input_".$sem_2_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 2 subsidairy Modules Subject 2
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_2_query)){
            while($gn_sub_2_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_2_subsidairy_modules['module_semester'] == 2){
                    $sem_2_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_2_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_2_subs_credits\" id = \"sem_2_subs_credits_".$sem_2_subs_count."\">".$gn_sub_2_subsidairy_modules['module_credits']."</td>
                        <td><input type=\"checkbox\" id = \"sem_2_subs_input_".$sem_2_subs_count."\"></td>
                    </tr>
                    
                    ";
                }
            }
        }

        // 
        // Semester 2 subsidairy Modules Subject 3
        // 

        if($q_return = mysqli_query($conn, $get_subsidairy_modules_gn_sub_3_query)){
            while($gn_sub_3_subsidairy_modules = mysqli_fetch_assoc($q_return)){
                if($gn_sub_3_subsidairy_modules['module_semester'] == 2){
                    $sem_2_subs_count++;
                    echo "
                    <tr>
                        <td>".$gn_sub_3_subsidairy_modules['module_name']."</td>
                        <td name = \"sem_2_subs_credits\" id = \"sem_2_subs_credits_".$sem_2_subs_count."\">".$gn_sub_3_subsidairy_modules['module_credits']."</td>
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
    <p></p>
    <button id = "btn_submit" disabled>Submit</button>
    <script src = "script.js"></script>
</body>
</html>