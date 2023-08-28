<?php
    session_start();
    include "connection.php";

    if(isset($_POST['submit'])){
        $stud_num = $_POST['stud_num'];
        $current_time = date("h:i A");

        $sql = "SELECT * FROM `prototype` WHERE stud_num=".$stud_num." AND state=0";
        $select = $conn->query($sql);

        if($select->num_rows>0){
            $sql = "UPDATE prototype SET time_in=NOW(), state=1 WHERE stud_num=".$stud_num;
            $query=$conn->query($sql);
            $_SESSION['feedback'] = "Time In Registered";
        }
        else{

            $sql = "SELECT * FROM `prototype` WHERE stud_num=".$stud_num." AND state=1";
            $select = $conn->query($sql);

            if($select->num_rows>0){
                $sql = "UPDATE prototype SET time_out=NOW(), state=2 WHERE stud_num=".$stud_num;
                $query=$conn->query($sql);
                $_SESSION['feedback'] = "Time Out Registered";
            }
            else{
                $_SESSION['feedback'] = "Time in and Time out is already Registered";
            }
        }
    }
    header("location: ../index.php");
    $conn->close();
?>