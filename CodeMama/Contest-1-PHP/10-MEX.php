<?php
    # Write your PHP code from here
   
function findMinimumMissing($arr) {
     $n = count($arr);
     $present = array();

     for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] >= 0) {
            $present[$arr[$i]] = true;
        }
    }

    // Find the smallest non-negative integer not present in the array
    for ($i = 0; $i <= $n; $i++) {
        if (!isset($present[$i])) {
            return $i;
        }
    }

    return $n + 1;
}
    $n = intval(trim(fgets(STDIN)));
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);
    echo findMinimumMissing($arr);
?>