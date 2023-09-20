<?php
    # Write your PHP code from here
    $str = fgets(STDIN);

    if($str[2] == '+') $output = (int)$str[0] + (int)$str[4];
    else if($str[2] == '-') $output = (int)$str[0] - (int)$str[4];
    else if($str[2] == '*') $output = (int)$str[0] * (int)$str[4];
    else $output = (int)$str[0] / (int)$str[4];

    echo intval($output);




?>