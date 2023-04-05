<?php

$conn = mysqli_connect('localhost', 'root','','rad_project');

if($conn){
    session_start();
}
else{
    echo "Connection Failed";
}

?>