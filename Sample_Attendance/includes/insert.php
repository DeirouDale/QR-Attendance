<?php
    include "connection.php";

    if(isset($_POST['outputData'])){

        $stud_num = $_POST['outputData'];

        $result = $conn->query("SELECT * FROM `prototype` WHERE stud_num=".$stud_num."");

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<span>Name: ". $row['name'] ." ". $row['course'] ." ". $row['year'] ."". $row['section'] ."</span>";
            }
        }
        else{
            echo "0 results";
        }
    }

    
    $conn->close();

?>