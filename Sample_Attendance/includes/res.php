<?php
    session_start();
    include "connection.php";

    if(isset($_POST['outputData'])){

        $stud_num = $_POST['outputData'];

        $_SESSION['stud_num'] = $stud_num;

        header("Location: decide.php");
        exit();
    }

    
    $conn->close();
?>