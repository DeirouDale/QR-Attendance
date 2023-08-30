<?php
    session_start();
    include "connection.php";
    date_default_timezone_set('Asia/Manila');

    if(isset($_POST['submit'])){
        $stud_num = $_POST['stud_num'];
        $stud_name = $_POST['stud_name'];
        $current_time = date("h:i A");  // Format the time in 12-hour format with AM/PM

        $sql = "SELECT * FROM `prototype` WHERE stud_num=".$stud_num." AND state=0";
        $select = $conn->query($sql);

        if($select->num_rows>0){
            $sql = "UPDATE prototype SET time_in= '$current_time', state=1 WHERE stud_num=".$stud_num;
            $query=$conn->query($sql);
            $_SESSION['feedback'] = "$stud_name: Time In Registered";
        }
        else{

            $sql = "SELECT * FROM `prototype` WHERE stud_num=".$stud_num." AND state=1";
            $select = $conn->query($sql);

            if($select->num_rows>0){
                $sql = "UPDATE prototype SET time_out= '$current_time', state=2 WHERE stud_num=".$stud_num;
                $query=$conn->query($sql);
                $_SESSION['feedback'] = "$stud_name: Time Out Registered";
            }
            else{
                $_SESSION['feedback'] = "$stud_name: Time in and Time out is already Registered";
            }
        }
    }
    header("location: ../index.php");
    $conn->close();
?>
