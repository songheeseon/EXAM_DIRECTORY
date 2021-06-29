<?php
    
    $num = 2;
    $count = 1;
    
    while($num<10)
    {
        echo "<pre>";
        if($count==1)
            echo $num, "단<br>";
        echo $num,"  x  " ,$count,"  =  " ,$num*$count,"<br>";
        $count++; 
        echo "</pre>";
        if($count==10)
        {
            $num++;
            $count=1;
            echo "<br>";
        }
    }
?>