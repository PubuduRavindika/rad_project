<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require "../../config/config.php";

    if (isset($_POST["Import"])) {

        $filename = $_FILES["file"]["tmp_name"];

        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename, "r");


            echo "
        <table>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>NIC No</th>
            <th>Combination</th>
            <th>Batch</th>
        </tr>
        ";

            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
                echo "
                    <tr>
                    <td>" . $getData[0] . "</td>
                    <td>" . $getData[1] . "</td>
                    <td>" . $getData[2] . "</td>
                    <td>" . $getData[3] . "</td>
                    <td>" . $getData[4] . "</td>
                    </tr>
                
                ";

                $student_add_query = "INSERT INTO student_table (student_index_number, student_nic_number, student_initials_name,student_batch_id, student_base_comb,student_password, student_first_time_login) VALUES ('$getData[0]', '$getData[2]', '$getData[1]', '$getData[4]', '$getData[3]','$getData[2]' ,'1')";

                if ($q_return = mysqli_query($conn, $student_add_query)) {
                    echo "Added Sucessfull \n";
                } else {
                    echo "Error";
                }
            }
            echo "
                </table>
           ";
        }
    }
    ?>

</body>

</html>