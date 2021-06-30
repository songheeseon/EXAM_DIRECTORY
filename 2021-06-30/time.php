<?php
    ini_set('date.timezone', 'asia/Seoul');
    echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초",time());
    echo "<br /><br />";
    

    // Y(y) 년도를 표시, m(n) 월을 표시,  d(j)일을 표시, H(G)시를 표시, s 초를 표시 
    // A(a) 오전 오후 표시, D(I) 요일을 표시, M(F) 월을 표시 z 올해의 몇일째인지

    $start_Time =  mktime(10,00,00,06,30,2021);
    $end_Time = mktime(11,10,00,06,30,2021);

    echo date($start_Time);
    echo "<br />";

    echo $start_Time;
    echo "<br />";
    echo $end_Time;
    echo "<br />";

    if($start_Time <= time() && $end_Time > time()){
        echo "블소 화룡 이벤트(거대보스 던전)에 참여하세요!";
    }
    else{
        echo "블소 화룡 이벤트(거대보스 던전)가 종료되었습니다!";
    }
    echo "<br />";
?>