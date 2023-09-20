<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d%d", $n, $k);
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);
    if($k == 0){
    $last = array_pop($arr);
    array_unshift($arr, $last);
    }else{
        $first = array_shift($arr);
        array_push($arr, $first);
    }
    
    echo implode(" ", $arr);
?>