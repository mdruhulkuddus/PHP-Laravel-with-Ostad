<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d", $n);
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);
    sort($arr);
    echo implode(" ", $arr);
?>