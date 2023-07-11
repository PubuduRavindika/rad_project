<?php

    require_once '../config/config.php';

    $student_index = $_SESSION['current_student_index'];

    
    if(isset($_POST['submit'])){
        $new_password = $_POST['new_password'];
        $new_confirm_password = $_POST['new_confirm_password'];
        if($new_password == $new_confirm_password){
            $update_password = "UPDATE student_table SET student_password = '$new_password' WHERE student_index_number = '$student_index'";
    
            if(mysqli_query($conn, $update_password)){
                header("location:../logout/logout.php");
            }
    
        }
        else {
            echo '
            <script>
                alert("Incorrect Combination. Retry Again!!!");
            </script>
            ';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>New User</title>
</head>
<body class="cp-body">
    <div class="cp-container">
        <div class="cp-left">
            <div class="cp-header">
                <h1 class="cp-h1-header">Change Password</h1>
                <p class="cp-p-header">Enter New Password Here</p>
            </div>
            <form method="POST">
                <div class="cp-form-content">
                    <div class="cp-form-item">
                        <label for="cp-newpassword" class="cp-newpassword-label">Enter New Password</label>
                        <input name="new_password" type="password" id="" class="cp-newpassword">                        
                    </div>
                    <div class="cp-form-item">
                        <label for="cp-confirmpassword" class="cp-confirmpassword-label">Confirm New Password</label>
                        <input name = "new_confirm_password" type="password" id="" class="cp-confirmpassword">                        
                    </div>

                    <button type="submit" name="submit">CHANGE</button>
                </div>
            </form>
        </div>

    </div>
    
</body>
</html>