<?php
    # Write your PHP code from here
   
//     $arr = [0, 1, 1];
//    for($i = 3; $i < 1000000; $i++){
//     $arr[$i] = ($arr[$i - 1] + $arr[$i - 2])%1000000007;
//    }
//    fscanf(STDIN, "%d", $p);
//    echo $arr[$p];

  // 0 1 1 2

    fscanf(STDIN, "%d", $p);
    $a = 0; $b = 1;
    for($i = 1; $i < $p; $i++){
        $temp = ($a + $b)%1000000007;
        $a = $b;
        $b = $temp;
    }

    echo $b;
?>