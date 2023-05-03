<?php

require_once("../config.php");

$ac_year = $_POST["academic_year"];
echo "Acdemic year = " . $ac_year;

if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];
    echo $filename;

    if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");


        echo "
        <table>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>ID No</th>
        </tr>
        ";
        
        $table_select_query = "SELECT table_name FROM test_students_tables WHERE table_id = $ac_year";
        
        $table_name;
        
        if($q_return = mysqli_query($conn,$table_select_query)){
            $table_name = mysqli_fetch_assoc($q_return);
        }

          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
                // echo "
                //     <tr>
                //     <td>".$getData[0]."</td>
                //     <td>".$getData[1]."</td>
                //     <td>".$getData[2]."</td>
                //     </tr>
                
                // ";
                

                $add_students_query = "INSERT INTO ".$table_name['table_name']."(st_index,st_name,st_com) VALUES (".$getData[0].",\"".$getData[1]."\",".$getData[2].")";

                // echo "<br />" . $add_students_query;

                if($q_return = mysqli_query($conn, $add_students_query)){
                    echo "Added Sucessfull \n";
                }
                else {
                    echo "Error";
                }

           }

        //    echo "
        //         </table>
        //    ";
    }

}
?>