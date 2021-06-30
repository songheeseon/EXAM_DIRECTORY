<?php
    $email = "j1004me@naver.com";
    // 해당 범위를 기준으로 앞 뒤로 잘라내어 저장
    $email_Array = explode("@", $email);
    echo "<pre>";

    // 배열의 모든 요소 출력
    var_dump($email_Array);

    echo "이메일 호스트 출력<br />";
    echo $email_Array[1];
?>