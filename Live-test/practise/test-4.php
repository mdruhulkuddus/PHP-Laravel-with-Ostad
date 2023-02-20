<?php
function LongestWord($string){
    $array = explode(" ", $string);
    $longest = $array[0];
    for($i = 1; $i < count($array); $i++){
        if(strlen($array[$i]) > strlen($longest)) $longest = $array[$i];
    }
    return $longest;
}
$str = "the brown fish bangladesh";

echo LongestWord($str);