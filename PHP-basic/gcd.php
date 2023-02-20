<?php

function gcd(int $a, int $b){
    if($b == 0)
    return $a;

    return gcd($b, $a%$b);
}

list($n1, $n2) = explode(" ", fgets(STDIN));
echo gcd($n1, $n1);




