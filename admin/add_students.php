<?php

    require_once("../config.php");

    if(!isset($_SESSION["current_admin"])){
        header("Location:index.php?result=Please Login First");
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
    Add New Students
    <form action="action_csv_students_adder.php" method = "POST"  enctype="multipart/form-data">
    <?php
    
        // $get_table_query = "SELECT * FROM student_table";
        // if($q_return = mysqli_query($conn, $get_table_query)){
        //     while($tables = mysqli_fetch_assoc($q_return)){
        //         echo '
        //         <input type="radio" name="academic_year" id="'.$tables['table_id'].'" value = "'.$tables['table_id'].'" required>
        //         <label for="'.$tables['table_id'].'">Academic Year '.$tables['table_name'].'</label>
                
        //         ';
        //     }
        // }

    ?>
        <br />
        <p>Accepted CSV format:</p>
        <img src="../images/csv_format.jpg" alt="Accepted CSV format">
        <br />
        <label for="file">Select CSV file:</label>
        <input type="file" name="file" id="file" accept=".csv" required>
        <button type = "submit" name = "Import">Submit</button>

    </form>
    <p>-- or --</p>
    <form action="action_students_adder.php" method = "POST" style = "display:flex; flex-direction:column;">
        <label for="index">Index: </label>
        <input type="text" id = "index" name = "index" required>

        <label for="name">Name with Initials: </label>
        <input type="text" name = "name" id = "name" required>

        <label for="nic_number">NIC Number: </label>
        <input type="text" name = "nic_number" id = "nic_number" required>

        <label for="combination">Base Combination: </label>
        <!-- <input type="text" name = "combination" id = "combination"> -->
        <select name = "combination" id = "combination" required>
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
        </select>

        <label for="batch_id">Batch ID: </label>
        <input type="number" name = "batch_id" id = "batch_id" required>

        <input type="submit" value="Submit">
    </form>
        
</body>
</html>