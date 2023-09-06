<?php
    session_start();
    include "includes/connection.php";

    if (isset($_SESSION['stud_num'])) {
        $stud_num = $_SESSION['stud_num'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Sample Attendance</title>
    
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
</head>
<body>
    <div id="container">
    <?php
        $result = $conn->query("SELECT * FROM `cpe4a` WHERE stud_num=".$stud_num);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){?>
                <span><?php echo "Name: ". $row['name'] ." ". $row['course'] ." ". $row['year'] ."". $row['section']; ?></span>
                <form method="post" action="includes/insert.php">
                    <input type="hidden" name="stud_num" value="<?php echo $row['stud_num'] ?>">
                    <input type="hidden" name="stud_name" value="<?php echo $row['name'] ?>">
                    <input type="submit" name="submit">
                </form>
            <?php
            }
        }
    ?>
    </div>
    <script src="qrScanner.js"></script>
</body>
</html>