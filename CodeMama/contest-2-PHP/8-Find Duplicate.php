<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d", $n);
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);
    sort($arr);
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $arr[$i + 1])
        {
            echo $arr[$i]; break;
        }
    }
?>