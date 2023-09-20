<?php
    # Write your PHP code from here
    $arr=[];
    $str = trim(fgets(STDIN));
    foreach(str_split($str) as $char){
        $arr[$char]++;
    }
   
    asort($arr);
    end($arr);
    $lastKey = key($arr);
    $lastValue = current($arr);
    
    $maxChar = ''; $maxCount = 0;
    
    foreach($arr as $char => $count) {
        if ($count > $maxCount || ($count == $maxCount && $char < $maxChar)) {
            $maxChar = $char;
            $maxCount = $count;
        }
    }
    echo $maxChar." ".$maxCount;
    //print_r($arr);
?>