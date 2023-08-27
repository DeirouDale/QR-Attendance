<?php
    include "includes/connection.php";
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
        <div class="header">
            <h1>Scan QR Code</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        
        <div class= "img-sample" id="image">
            <img src="img/sample.png">
        </div>

        <button id="btn-scan-qr">
            SCAN
        </button>
    
        <canvas hidden="" id="qr-canvas">
        </canvas>
    
    </div>
    
    <div id="popup">
        <div id="qr-result" hidden="">
            <form action="includes/insert.php" method="post">
                <input type="hidden" name="outputData" id="outputData">
            </form>
        </div>

    </div>
    <script src="qrScanner.js"></script>
</body>
</html>