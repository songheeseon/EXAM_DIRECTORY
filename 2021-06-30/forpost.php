<?php
    $lotto = array(1,3,5,7,9,11);
    $input_lotto = array($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5'],$_POST['num6']);

    $count = 0;

    for($mux_count = 0; $mux_count <=5; $mux_count++)
    {
        $input_lotto[$mux_count] == $lotto[$mux_count] ? $count++ : $count;
    }