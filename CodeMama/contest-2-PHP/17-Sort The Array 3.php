<?php
    # Write your PHP code from here

    function mergeSort(&$arr) {
         $length = count($arr);
        if ($length <= 1) {
            return;
        }
        $mid = (int)($length / 2);
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        mergeSort($left);
        mergeSort($right);

        $i = $j = $k = 0;

        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[$k++] = $left[$i++];
            } else {
                $arr[$k++] = $right[$j++];
            }
        }

        while ($i < count($left)) {
            $arr[$k++] = $left[$i++];
        }

        while ($j < count($right)) {
            $arr[$k++] = $right[$j++];
        }
    }

        fscanf(STDIN, "%d", $n);
        $str = trim(fgets(STDIN));
        $arr = explode(" ", $str);
        mergeSort($arr);
        $sortedArr = implode(" ", $arr);
        echo $sortedArr;
?>