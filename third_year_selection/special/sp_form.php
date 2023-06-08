<?php

require_once("config.php");

if(isset($_GET["q"]) && isset($_GET["choice"])){
    $special_comb = $_GET["q"];
    $comb_choice = $_GET["choice"];
    echo "Choice: ".$comb_choice." <br />";
    $special_query = "SELECT sp_id, sp_subject FROM sp_table WHERE sp_id = '$special_comb'";
        if($q_return = mysqli_query($conn, $special_query)){
            $special_result = mysqli_fetch_assoc($q_return);
            echo "COMB ".$special_result['sp_id']." Subject : ". $special_result['sp_subject'];
        }
}
else{
    echo "Something went wrong";
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
    <form action="sp_form_adder.php" method = "POST">
        <input type="checkbox" name="choice" id="choice" value = "<?php echo $comb_choice;?>" checked >
        <input type="checkbox" name="comb" id="comb" value = "<?php echo $special_comb;?>" checked >
        <input type="submit" value = "Submit">
    </form>
</body>
</html>