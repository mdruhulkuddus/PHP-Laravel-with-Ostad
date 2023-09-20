<?php
    # Write your PHP code from here
    function isPalindrome($str){
        return strrev($str) == $str;
    }

    $str = trim(fgets(STDIN));
    if(isPalindrome($str)){
        echo $str;
    }else
    {
        for($i = strlen($str) - 1; $i >= 0; $i--)
        {
            $substr = substr($str, 0, $i);
            if(isPalindrome($substr)){
                $remainingString = substr($str, $i, strlen($str));
                $makestr = strrev($remainingString).$str;
                echo $makestr;
                break;
            }
        }
    }
    
    
?>






