<?php

    require_once("config.php");

    $choice = $_POST["choice"];
    $comb = $_POST["comb"];

    $query = "UPDATE selection_form_table SET sp_choice_$choice = '$comb' WHERE student_id = 192153";

    if($q_return = mysqli_query($conn, $query)){
        header("Location:sub_view.php");
    }

?>