<?php

    require "../../config/config.php";

    if(!isset($_SESSION["current_admin"])){
        header("Location:../login/login.php?result=Please Login First");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body class="sr-body">
    <div class="container">
        <header class="rf-header">Add New Students</header>
        <label>Accepted CSV Format</label>
        <img class="csv-image" src="csv_format.jpg" alt="Accepted CSV format"> 
        <form class="sr-form" action="action_csv_students_adder.php" method = "POST"  enctype="multipart/form-data">
            <div class="sr-csv-submit">
                <label for="file">Select CSV file:</label>
                <input type="file" name="file" id="file" accept=".csv" required>
                <!-- <button onclick="defaultbtnactive()" class="custom-btn" id="custom-btn">Choose a file</button> -->
                <button type = "submit" name = "Import">Submit</button>
            </div>  
        </form>
        <form action="action_students_adder.php" method = "POST">
            <div class="line"></div>
            
            <div class="sr-input-box">
                <label class="sr-lable">Index</label>
                <input class="sr-input" type="text" placeholder="Index" id = "index" name = "index" required>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">Name with Initials</label>
                <input class="sr-input" type="text" placeholder="Name with Initials" name = "name" id = "name" required>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">NIC Number</label>
                <input class="sr-input" type="text" placeholder="NIC Number" name = "nic_number" id = "nic_number" required>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">Base Combination</label>
                <select class="sr-input" name="combination" id = "combination" required>
                    <option value = "1">1</option>
                    <option value = "2">2</option>
                    <option value = "3">3</option>
                </select>
            </div>

            <div class="sr-input-box">
                <label class="sr-lable">Batch ID</label>
                <input class="sr-input" type="number" placeholder="Batch ID" name = "batch_id" id = "batch_id" required>
            </div>

            <button type = "submit" name = "Import">Submit</button>

        </form>

    </div>
</body>
</html>