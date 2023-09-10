<?php
    # Write your PHP code from here
    $str1 = trim(fgets(STDIN));
    $str_to_char = str_split($str1);
    sort($str_to_char);
    $str1 = implode("", $str_to_char);

    $str2 = trim(fgets(STDIN));
     $str_to_char = str_split($str2);
     sort($str_to_char);
    $str2 = implode("", $str_to_char);

    if($str1 == $str2) echo "YES"."\n";
    else echo "NO"."\n";
?>