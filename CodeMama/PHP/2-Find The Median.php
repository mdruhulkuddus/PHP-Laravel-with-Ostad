<?php
    # Write your PHP code from here
    $n = intval(trim(fgets(STDIN)));
    $input = trim(fgets(STDIN));
    $arr = explode(" ", $input);
    sort($arr);
    $mid = ($n / 2);
    echo $arr[$mid];
    //print_r($arr);
?>