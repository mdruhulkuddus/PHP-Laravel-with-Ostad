<?php
    # Write your PHP code from here
    $len = intval(trim(fgets(STDIN)));
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);
    $firstSum = $SecSum = 0;
    $mid = intval($len%2 == 0 ? $len/2 : $len/2 + 1);
    for($i = 0; $i <$mid; $i++){
        $firstSum += $arr[$i];
    }
    for($i = $mid; $i < $len; $i++){
        $SecSum += $arr[$i];
    }
    if($firstSum > $SecSum){
        echo "1";
    }else if($firstSum < $SecSum){
         echo "2";
    }else{
        echo "3";
    }
?>