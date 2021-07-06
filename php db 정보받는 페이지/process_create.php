<?php
      $conn = mysqli_connect(
        'localhost',
        'HS',
        '1234',
        'exam');

        $filterd = array('stNUM'=> mysqli_real_escape_string($conn, $_POST['stNUM']),
        'name' => mysqli_real_escape_string($conn, $_POST['name']),
        'gender' => mysqli_real_escape_string($conn, $_POST['gender']));

        $sql = "INSERT INTO exam1 values(
        '0',
        '{$filterd['stNUM']}',
        '{$filterd['name']}',
        '{$filterd['gender']}', 
        NOW()
        )
        ";

        echo $sql;

        $result = mysqli_query($conn, $sql);
        if($result == false) {
            echo "저장하는 과정에서 문제가 발생했습니다";
            error_log(mysqli_error($conn));
        }else{
            echo "성공했습니다. <a href='program.php'>돌아가기</a>";
        }

?>