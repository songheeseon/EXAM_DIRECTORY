


<?php 
    ini_set('display_error', '0');
    $num = $_GET["num"];
    $count = $_GET["count"]+$num;
    echo <<<_END
    <html>
        <head>
            <meta chareset="utf-8"/>
            <title>세븐나이츠2 뽑기 확률 알아보기</title>
        </head>

        <body>
            <h2>1회 혹은 10연속 뽑기를 선택하세요.</h2>
            <button onclick="window.location.href='game_1.php?num=1&&count=$count'">1회뽑기</button>
            <button onclick="window.location.href='game_1.php?num=10&&count=$count'">10회뽑기</button>
        </body>
    </html>
_END;
    echo "<br>시도횟수 : ", $count;
    if($num ==1 )
    {
        $select_num = rand(0, 100000)/1000;
        select_char($select_num);
    }
    else{
        for($i=0; $i<$num; $i++)
        {
            $select_num = rand(0, 100000)/1000;
            select_char($select_num);
        }
    }

    function select_char($select_num)
    {
        if($select_num>=0 && $select_num<=0.01)
        {
            echo '<p style="color:red">네스트라의 사도 세인<br>';
        }
        else if($select_num>=0.01 && $select_num<=0.02)
        {
            echo '<p style="color:red">네스트라의 사도 밍<br>';
        }
        else if($select_num>=0.02 && $select_num<=0.03)
        {
            echo '<p style="color:red">엘레나의 검 발데르<br>';
        }
        else if($select_num>=0.03 && $select_num<=0.04)
        {
            echo '<p style="color:red">엘레나의 검 코제르<br>';
        }
        else if($select_num>=0.04 && $select_num<=0.77)
        {
            echo '<p style="color:red">포디나의 여제 아일린<br>';
        }
        else if($select_num>=0.77 && $select_num<=1.5)
        {
            echo '<p style="color:red">절대 수호자 루디<br>';
        }
        else if($select_num>=1.5 && $select_num<=2.23)
        {
            echo '<p style="color:red">파멸의기사 델론즈<br>';
        }
    }
?>