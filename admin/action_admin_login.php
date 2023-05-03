<?php

require_once("../config.php");

if(isset($_POST['username']) && isset($_POST['password'])){

    // For Security reasons
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username) || empty($password)){
        header("Location:index.php?result=Invalid username or password.");
    }
    else {
        $login_query = "SELECT password FROM test_admins WHERE username = '$username'";

        if($q_return = mysqli_query($conn,$login_query)){
            $q_result = mysqli_fetch_assoc($q_return);
            if($q_result['password'] == $password){
                echo "Login Successful!";
                $_SESSION["current_admin"] = $username;
                header("Location:admin_dashboard.php");
            }
            else{
                header("Location:index.php?result=Invalid Password!");
            }
        }
        else{
            echo "Something wrong!";
        }
    }

}
else{
    header("Location:index.php");
}

?>