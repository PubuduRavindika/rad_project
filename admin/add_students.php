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

    <p>Choose Academic Year :</p>
    <form action="students_adder.php" method = "POST"  enctype="multipart/form-data">
    <?php
    
        $get_table_query = "SELECT * FROM test_students_tables";
        if($q_return = mysqli_query($conn, $get_table_query)){
            while($tables = mysqli_fetch_assoc($q_return)){
                echo '
                <input type="radio" name="academic_year" id="'.$tables['table_id'].'" value = "'.$tables['table_id'].'" required>
                <label for="'.$tables['table_id'].'">Academic Year '.$tables['table_name'].'</label>
                
                ';
            }
        }

    ?>
        <br />
        <label for="file">Select CSV file:</label>
        <input type="file" name="file" id="file" required>
        <button type = "submit" name = "Import">Submit</button>

    </form>
        
</body>
</html>