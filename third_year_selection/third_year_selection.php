<?php


require "../config/config.php";

$base_combination = $_SESSION['current_base_comb'];
$current_image = $_SESSION['current_image'];
$current_nic = $_SESSION['current_nic_number'];
$current_st_name = $_SESSION['current_student_name'];
$current_st_index = $_SESSION["current_student_index"];


$sql = "SELECT * FROM selection_form_table WHERE student_index_number = $current_st_index";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    header("Location:sub_view.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">

    <?php
    if(isset($_GET["error"]))
        echo "
            <script>
                alert('Invalid Choice!');
            </script>
        ";
    ?>

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
    </div>
    <div class="main_container">
        <!-- <form action="sub_view.php" method="POST"> -->
        <form action="view_selected.php" method="POST">
            <div class="sub_container">
                <div class="sub_holder" onchange="special_selection_enabler()">
                    <h4>Special Subject</h4>
                    <p>Select maximum 3 subjects</p>
                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="special_switch_1"> First Choice: </p>
                        <select name="special_option_1" id="special_option_1" disabled>
                            <option value="0">Select First Choice</option>
                            <option value="1">CMIS</option>
                            <option value="2">ELTN</option>
                            <option value="3">MATH</option>
                            <option value="4">IMGT</option>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="special_switch_2" disabled> Second Choice: </p>
                        <select name="special_option_2" id="special_option_2" disabled>
                            <option value="0">Select Second Choice</option>
                            <option value="1">CMIS</option>
                            <option value="2">ELTN</option>
                            <option value="3">MATH</option>
                            <option value="4">IMGT</option>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="special_switch_3" disabled> Third Choice: </p>
                        <select name="special_option_3" id="special_option_3" disabled>
                            <option value="0">Select Third Choice</option>
                            <option value="1">CMIS</option>
                            <option value="2">ELTN</option>
                            <option value="3">MATH</option>
                            <option value="4">IMGT</option>
                        </select>
                    </div>
                </div>
                <!-- Joint Major Section -->
                <!-- Joint Major Section -->
                <!-- Joint Major Section -->
                <div class="sub_holder" onchange="jmajor_selection_enabler()">
                    <h4>Joint-Major Combinations</h4>
                    <p>Select maximum 3 combinations</p>
                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="jmajor_switch_1"> First Choice: </p>
                        <select name="jmajor_option_1" id="jmajor_option_1" disabled>
                            <option value="0">Select First Choice</option>

                            <?php
                            /*

                            // METHOD 1

                            CREATE VIEW selected_combinations AS SELECT * FROM jm_base_combinations_table WHERE base_comb_id = 1;
                            
                            SELECT * FROM jm_combinations_table INNER JOIN selected_combinations ON jm_combinations_table.jm_comb_id = selected_combinations.jm_comb_id;

                            DROP VIEW selected_combinations;

                            // METHOD 2


                            SELECT * FROM jm_combinations_table WHERE jm_comb_id IN (SELECT jm_comb_id FROM jm_base_combinations_table WHERE base_comb_id = 1);
                            */
                            
                            $get_jmajor_choices_query = "SELECT jm_comb_id, jm_comb_name FROM jm_combinations_table WHERE jm_comb_id IN (SELECT jm_comb_id FROM jm_base_combinations_table WHERE base_comb_id = $base_combination)";

                            if($q_return = mysqli_query($conn, $get_jmajor_choices_query)){
                                while($jmajor_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$jmajor_choices['jm_comb_id']."\">".$jmajor_choices['jm_comb_name']."</option>
                                    ";
                                }
                            }
                            
                            ?>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="jmajor_switch_2" disabled> Second Choice: </p>
                        <select name="jmajor_option_2" id="jmajor_option_2" disabled>
                            <option value="0">Select Second Choice</option>
                            <?php
                            if($q_return = mysqli_query($conn, $get_jmajor_choices_query)){
                                while($jmajor_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$jmajor_choices['jm_comb_id']."\">".$jmajor_choices['jm_comb_name']."</option>
                                    ";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="jmajor_switch_3" disabled> Third Choice: </p>
                        <select name="jmajor_option_3" id="jmajor_option_3" disabled>
                            <option value="0">Select Third Choice</option>
                            <?php
                            if($q_return = mysqli_query($conn, $get_jmajor_choices_query)){
                                while($jmajor_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$jmajor_choices['jm_comb_id']."\">".$jmajor_choices['jm_comb_name']."</option>
                                    ";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- General Section -->
                <!-- General Section -->
                <!-- General Section -->
                <div class="sub_holder" onchange="general_selection_enabler()">
                    <h4>General Combinations</h4>
                    <p>Select maximum 3 combinations</p>
                    <!-- <div class="selection_box">
                        <p><input type="checkbox" name="" id="general_switch_1"> First Choice: </p>
                        <select name="general_option_1" id="general_option_1" disabled>
                            <option value="0">Select First Choice</option>
                            <option value="1a">1A</option>
                            <option value="1b">1B</option>
                            <option value="1c">1C</option>
                            <option value="2a">2A</option>
                            <option value="2b">2B</option>
                            <option value="2c">2C</option>
                            <option value="3a">3A</option>
                            <option value="3b">3B</option>
                            <option value="3c">3C</option>
                        </select>
                    </div> -->
                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="general_switch_1"> First Choice: </p>
                        <select name="general_option_1" id="general_option_1" disabled>
                            <option value="0">Select First Choice</option>
                            <?php

                            $get_general_choices_query = "SELECT gn_comb_id, gn_comb_name FROM gn_combinations_table WHERE gn_comb_id IN (SELECT gn_comb_id FROM gn_base_combinations_table WHERE base_comb_id = $base_combination)";

                            if($q_return = mysqli_query($conn, $get_general_choices_query)){
                                while($general_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$general_choices['gn_comb_id']."\">".$general_choices['gn_comb_name']."</option>
                                    ";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="general_switch_2" disabled> Second Choice: </p>
                        <select name="general_option_2" id="general_option_2" disabled>
                        <option value="0">Select Second Choice</option>
                            <?php
                            if($q_return = mysqli_query($conn, $get_general_choices_query)){
                                while($general_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$general_choices['gn_comb_id']."\">".$general_choices['gn_comb_name']."</option>
                                    ";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="selection_box">
                        <p><input type="checkbox" name="" id="general_switch_3" disabled> Third Choice: </p>
                        <select name="general_option_3" id="general_option_3" disabled>
                        <option value="0">Select Third Choice</option>
                            <?php
                            if($q_return = mysqli_query($conn, $get_general_choices_query)){
                                while($general_choices = mysqli_fetch_assoc($q_return)){
                                    echo "
                                    <option value=\"".$general_choices['gn_comb_id']."\">".$general_choices['gn_comb_name']."</option>
                                    ";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- JavaScript -->
    <script src="../assets/script.js"></script>
</body>

</html>