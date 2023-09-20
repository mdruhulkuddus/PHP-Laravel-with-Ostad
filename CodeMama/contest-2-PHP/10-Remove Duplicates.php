<?php
    # Write your PHP code from here
       fscanf(STDIN, "%d", $n);
        $str = trim(fgets(STDIN));
        $arr = explode(" ", $str);
        $uniqe = array_unique($arr);
        $finalArr = implode(" ", $uniqe);
        echo $finalArr;
?>