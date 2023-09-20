<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d%d", $n, $m);
    $inputString = trim(fgets(STDIN));
    $arr1 = explode(" ", $inputString); // string to arr
    $inputString2 = trim(fgets(STDIN));
    $arr2 = explode(" ", $inputString2);

    $commonArrayValue = array_intersect($arr1, $arr2);
    $uniqeValueArr = array_unique($commonArrayValue);
    sort($uniqeValueArr);
    $output = implode(" ", $uniqeValueArr); // arr to string
    echo sizeof($uniqeValueArr). "\n" .$output;
?>