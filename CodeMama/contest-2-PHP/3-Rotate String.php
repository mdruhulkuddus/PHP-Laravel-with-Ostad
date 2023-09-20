<?php
    # Write your PHP code from here
    $str = trim(fgets(STDIN));
   
    $firstChar = $str[0];
    $restStr = substr($str, 1, strlen($str));
    echo $restStr.$firstChar;
?>