<?php

    $conn = mysqli_connect(
        'localhost',
        'HS',
        '1234',
        'exam' 
    );

    $spl = "SELECT * FROM exam1";
    $result = mysqli_query($conn, $spl);

?>
<!doctype html>
<html>
        <head>
        <meta charset = "utf-8">
        <title>당신의 정보를 입력받을게요</title>
        </head>
    <body>
        <form action ="process_create.php" method ="POST">
        <p><input type ="text" name ="stNUM" placeholder ="학번"><p>
        <p><input type ="text" name ="name" placeholder ="이름"><p>
        <p><input type ="text" name ="gender" placeholder ="성별"><p>
        <p><input type ="submit"><p>
        </form>
    </body>
    </html>