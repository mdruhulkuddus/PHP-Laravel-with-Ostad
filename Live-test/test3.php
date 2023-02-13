<?php

function hasPairWithSum($array, $sum) {
    $set = array();

    foreach ($array as $num) {
        if (in_array($sum - $num, $set)) {
            return true;
        }
        $set[] = $num;
    }
    return false;
}

$array = array(5, 7, 1, 2, 8, 4, 3);
$sum = 8;

if (hasPairWithSum($array, $sum)) {
    echo "True: Pair with sum " . $sum . " exists.";
} else {
    echo "False: Pair with sum " . $sum . " does not exists.";
}

?>
