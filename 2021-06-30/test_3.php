<?php
    $food = array('fruits' => array('orange', 'apple', 'banana'), 'veggie' => array('carrot', 'pea', 'collard'));

    // 재귀 count 수 
    // count 함수는 배열의 수를 셀 때 사용
    echo count($food, COUNT_RECURSIVE);
    // 결과
    echo "<br /><br />";
    // 보통 count 수 
    echo count($food);
    // 결과 
    echo "<br /><br />";
     
    for($i=0; $i<3; $i++){
        printf($food['fruits'][$i]);
        printf(" is %d<br>", strlen($food['fruits'][$i]));
    }
    var_dump($food);
    // var_dump, 배열의 모든 요소 출력기능 함수
    printf("<pre><br>\r\n");
    // var_export, 배열의 구조를 보기 쉽게 출력해주는 함수
    $str_test = var_export($food,true);
    
    printf("<br>", $str_test);
    printf($str_test);

    printf("<br>\r\n");
    // print_r 을 사용하면 깨지는 형태의 문자도 깨지지 않게 출력 
    echo print_r($food);
    printf("/<pre><br>\r\n");


?>