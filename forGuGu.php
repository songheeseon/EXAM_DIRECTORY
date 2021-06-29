<?php
 
    $num = 2;
    for($num=2; $num<10; $num++)
    {    
       
        echo $num,"단<br>";
    for($count=1; $count<10; $count++)
    {
        echo "<pre>";
        echo $num," x ",$count," = ",$num*$count,"<br>";
        echo "</pre>"; 
    }
    
}
?>