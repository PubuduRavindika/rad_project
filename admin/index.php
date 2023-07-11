<?php
    require "../config/config.php";

    if(isset($_SESSION["current_admin"])){
        header("Location:dashboard/admin_dashboard.php");
    }
    else {
        header("Location:login/login.php");
    }

?>