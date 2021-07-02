<html>
<head>
</head>
    <style>
    #item{
        float:left;
        width: 25%;
        
    }
    </style>

<body>
<?php 
    $item_list = array("item1","item2","item3","item4","item5","item6","item7","item8",
                        "rareitem1","rareitem2","rareitem3","rareitem4","rareitem5","rareitem6","rareitem7","rareitem8",
                        "Gitem1","Gitem2","Gitem3","Gitem4","Gitem5","Gitem6","Gitem7","Gitem8",
                        "Sitem1","Sitem2","Sitem3","Sitem4","Sitem5","Sitem6","Sitem7","Sitem8",
                        "Ritem1","Ritem2","Ritem3","Ritem4","Ritem5","Ritem6","Ritem7","Ritem8",
                        "Bitem1","Bitem2","Bitem3","Bitem4","Bitem5","Bitem6","Bitem7","Bitem8",
                        "Litem1","Litem2","Litem3","Litem4","Litem5","Litem6","Litem7","Litem8",
                        "LG_item1","LG_item2","LG_item3","LG_item4","LG_item5","LG_item6","LG_item7","LG_item8");

    $item_box_1 = $item_list[rand(0, count($item_list)-1)];
    $item_box_2 = $item_list[rand(0, count($item_list)-1)];
    $item_box_3 = $item_list[rand(0, count($item_list)-1)];
    $item_box_4 = $item_list[rand(0, count($item_list)-1)];
    $item_box_5 = $item_list[rand(0, count($item_list)-1)];
    $item_box_6 = $item_list[rand(0, count($item_list)-1)];
    $item_box_7 = $item_list[rand(0, count($item_list)-1)];
    $item_box_8 = $item_list[rand(0, count($item_list)-1)];

    $reward = compact('item_box_1','item_box_2','item_box_3','item_box_4','item_box_5','item_box_6','item_box_7','item_box_8');
    shuffle($reward);
    echo "<pre>";
    echo "<div id=\"main\">";
    for($i = 0; $i <8; $i++)
    {
    echo "<div id=\"item\"><caption>","Item Box ",$i+1,"   보상: <img src=\" ./img/$reward[$i].png\" style=width:200; height:200></caption></div>";
       if($i==3)
       {
           echo "<br>";
           echo "</div>";
       }
    }
    echo "</div>";
    echo "</pre>";
    
    
    /*
    for($j = 3000; $j <4000; $j++)
    {
        echo $j, ": <img src=\"https://ddragon.leagueoflegends.com/cdn/11.13.1/img/item/$j.png\"><br>";
    }
    */
?>

</body>
</html>
