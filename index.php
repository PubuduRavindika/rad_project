<?php
    require "config/config.php";

    if(isset($_SESSION["current_student_id"])){
        header("Location:dashboard/dashboard.php");
    }
    else {
        header("Location:login/login.php");
    }

//phpinfo();