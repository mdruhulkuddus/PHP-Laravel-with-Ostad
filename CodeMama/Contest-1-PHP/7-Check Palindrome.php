<?php
    # Write your PHP code from here
     function isPalindrome($str){
        $l = strlen($str); 
        for($i = 0; $i < $l/2; $i++){
            if($str[$i] == $str[$l - ($i+1)]) continue;
            else return false;
        }
        return true;
    }

    $str = trim(fgets(STDIN));
    if(isPalindrome($str))
    echo "YES"."\n";
    else echo "NO"."\n";
?>