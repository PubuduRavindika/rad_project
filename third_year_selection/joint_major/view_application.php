<?php

require_once '../../config/config.php';

$app_id = $_GET['app_id'];
$comb_id = $_GET['comb_id'];

$get_subs_modules = "SELECT module_name, module_credits, module_semester FROM modules_table WHERE module_id IN (SELECT module_id FROM jm_application_module_table WHERE app_id = '$app_id');";

$get_comp_modules_major_1 = "SELECT module_name, module_credits, module_semester FROM `modules_table` WHERE module_id IN (SELECT module_id FROM jm_compulsory_modules_table WHERE major_id IN(SELECT major_1_id FROM jm_combinations_table WHERE jm_comb_id = '$comb_id'));";

$get_comp_modules_major_2 = "SELECT module_name, module_credits, module_semester FROM `modules_table` WHERE module_id IN (SELECT module_id FROM jm_compulsory_modules_table WHERE major_id IN(SELECT major_2_id FROM jm_combinations_table WHERE jm_comb_id = '$comb_id'));";

// echo $get_comp_modules_major_1;

$result = mysqli_query($conn, $get_comp_modules_major_1);
$result_2 = mysqli_query($conn, $get_comp_modules_major_2);
$result_3 = mysqli_query($conn, $get_subs_modules);

$sem_1_modules = array(array());
$sem_2_modules = array(array());

$sem_1_count = 0;
$sem_2_count = 0;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // echo '
        //     <p>'.$row['module_name'].'</p>
        // ';
        if ($row['module_semester'] == '1') {
            $sem_1_modules[0][$sem_1_count] = $row['module_name'];
            $sem_1_modules[1][$sem_1_count] = $row['module_credits'];
            $sem_1_count++;
        } else if ($row['module_semester'] == '2') {
            $sem_2_modules[0][$sem_2_count] = $row['module_name'];
            $sem_2_modules[1][$sem_2_count] = $row['module_credits'];
            $sem_2_count++;
        }
    }
}

if (mysqli_num_rows($result_2) > 0) {
    while ($row = mysqli_fetch_assoc($result_2)) {
        if ($row['module_semester'] == '1') {
            $sem_1_modules[0][$sem_1_count] = $row['module_name'];
            $sem_1_modules[1][$sem_1_count] = $row['module_credits'];
            $sem_1_count++;
        } else if ($row['module_semester'] == '2') {
            $sem_2_modules[0][$sem_2_count] = $row['module_name'];
            $sem_2_modules[1][$sem_2_count] = $row['module_credits'];
            $sem_2_count++;
        }
    }
}

if (mysqli_num_rows($result_3) > 0) {
    while ($row = mysqli_fetch_assoc($result_3)) {
        if ($row['module_semester'] == '1') {
            $sem_1_modules[0][$sem_1_count] = $row['module_name'];
            $sem_1_modules[1][$sem_1_count] = $row['module_credits'];
            $sem_1_count++;
        } else if ($row['module_semester'] == '2') {
            $sem_2_modules[0][$sem_2_count] = $row['module_name'];
            $sem_2_modules[1][$sem_2_count] = $row['module_credits'];
            $sem_2_count++;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view_application.css">
    <title>Document</title>
</head>

<body class="subj-body">
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
                    <button onclick="location.href='../../logout/logout.php'">LOGOUT</button>
                </div>
            </span>
            <?php
            echo "<img src = '../../assets/images/students/" . $_SESSION['current_image'] . "'>";
            ?>
        </div>
    </div>

    <div class="subj-container">
        <div class="sem-header">Selected Subjects</div>
        <div class="sem">
            <div class="header">Semester 1</div>
            <div class="main-div">
                <div class="subjects">
                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                    </div>

                    <?php
                    for ($i = 0; $i < count($sem_1_modules[0]); $i++) {
                        echo '
                        <div class="sub-row">
                            <div class="cell">' . $sem_1_modules[0][$i] . '</div>
                            <div class="sub-cell" name= "sem_1_credit_value">' . $sem_1_modules[1][$i] . '</div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="total-credits">
            <div class="sub-colmn">Total Credits of Semester 1</div>
            <div class="sub-colmn" id="total_sem_1_credits">14</div>
        </div>

        <div class="sem">
            <div class="header">Semester 2</div>
            <div class="main-div">
                <div class="subjects">
                    <div class="sub-row">
                        <div class="sub-colmn">Module Name</div>
                        <div class="sub-colmn">Credits</div>
                    </div>

                    <?php
                    for ($i = 0; $i < count($sem_2_modules[0]); $i++) {
                        echo '
                        <div class="sub-row">
                            <div class="cell">' . $sem_2_modules[0][$i] . '</div>
                            <div class="sub-cell" name = "sem_2_credit_value">' . $sem_2_modules[1][$i] . '</div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="total-credits">
            <div class="sub-colmn">Total Credits of Semester 2</div>
            <div class="sub-colmn" id="total_sem_2_credits">14</div>
        </div>

        <div class="total-credits-final">
            <div class="sub-colmn-total">Total Credits of Year</div>
            <div class="sub-colmn-total" id="total_year_credits">14</div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>