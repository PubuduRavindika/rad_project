<?php

    require_once("config.php");

    if(!isset($_SESSION["current_index"])){
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
    Dashboard
    <?php 
        echo "Login as: ". $_SESSION["current_index"];

        $current_index = $_SESSION["current_index"];

        $getname_query = "SELECT first_name, last_name FROM test_users WHERE index_number = '$current_index'";
        if($q_return = mysqli_query($conn, $getname_query)){
            $names = mysqli_fetch_assoc($q_return);
            echo "<br />" . $names['first_name']. " " . $names['last_name'];
        }
    ?>
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
</body>
</html>