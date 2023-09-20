<?php

   function isFunny($s) {
    $length = strlen($s);

    for ($i = 0; $i < $length; $i += 2) {
        // Check if odd-positioned character is a lowercase English letter
        if (!ctype_lower($s[$i])) {
            return false;
        }
    }

    for ($i = 1; $i < $length; $i += 2) {
        // Check if even-positioned character is an uppercase English letter
        if (!ctype_upper($s[$i])) {
            return false;
        }
    }

    return true;
}

    $str =  trim(fgets(STDIN));
        if( isFunny($str)) echo "Yes";
        else echo "No"; 
    
?>