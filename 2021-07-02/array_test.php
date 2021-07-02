<?php
    // 이 방법도 가능, 다만 자주 사용x 코드를 동적으로 만드는게 중요해서
    /*$paper[3] = ["Copier", "Inkjet", "Laser", "Photo"];*/
    
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    for($i=0; $i<4; $i++)
    {
        echo "$i: $paper[$i]<br />";
    }
    
    echo "<pre>";
    print_r($paper);
    echo "</pre>";

    echo "<pre>";
    var_dump($paper);
    echo "<pre>";

    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser printer";
    $paper['photo'] = "Photographic paper";

    echo $paper['copier'],"<br>";
    echo $paper['inkjet'],"<br>";
    echo $paper['laser'],"<br>";
    echo $paper['photo'],"<br>";



?>