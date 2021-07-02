<?php
    $pi = array("Copier", "Inkjet", "Laser", "Photo");

    echo "pi element : ", $pi[2], "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser'  => "Laser Printer",
                'photo'  => "Photographic Paper");

    echo "p2 element : ", $p2['inkjet'],"<br>";
    echo "<br>";
    
    // 배열에선 for같은 반복문을 사용x 그래서 foreach문을 써야함, foreach(기존배열 as 여기서만 사용할 변수)

    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
        
    }
    echo "<br>";
    // => "이것은 값을 변수가 아닌 인덱스에 대입" 

    
    foreach($p2 as $item => $description) 
    // p2배열에 값을 변수가 아닌 인덱스에 대입 
    // => 을 사용하면 연관배열의 안쪽 값(인덱스)만 출력 가능하게함 
    {
        echo "$item : $description","<br>";
    }
    
    /* while + each 문 php7.2부터 사라진 함수 
    그래도 아래의 사용하는 방법에 대해서 알고는 있을 것, foreach문과 동일한 효과
    while(list($item, $description) = each($p2))
    {
        echo "$item: $description<br>";
    }
    */ 


    $products = array(
        'paper' => array( 
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "PhotoGraphic Printer"),

        'pens' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"),

        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "PaperClips") );

    echo "<pre>";
        foreach($products as $section => $items)
            foreach($items as $key => $value)
                echo "$section:\t$key\t($value)<br>";
    echo "</pre>";


    // sort, rsort, shuffle compact 배열 관련 함수 사용 
    // sort 배열 인덱스 정렬, rsort 배열 인덱스 역정렬 
    // shuffle 배열 인덱스 값 무작위 배치 
    // compact 변수로 이루어진 값들로 배열을 만드는 함수
    
    $number = array("10", "2", "3", "4", "1", "9", "7", "8", "6", "5");

    for($i=0; $i<10; $i++){
        echo $number[$i],"\t";
    }
    echo "<pre>";
    print_r($number);
    sort($number);
    print_r($number);
    rsort($number);
    print_r($number);

    shuffle($number);
    print_r($number);
    
    
    $fname = "Elizabeth";
    $sname = "Windsor";
    $address = "Buckingham Palace";
    $city = "London";
    $country = "United Kingdom";

    $contact = compact('fname', 'sname', 'address', 'city', 'country');
    print_r($contact);
    echo "</pre>";

?>