<?php
/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
*/

function evenOdd(int $number){
    if($number%2 == 0){
        return true;
    }
    else false;
}

if(evenOdd(5)){ // 6 even
    echo "Even Number\n";
}
else{
    echo "Odd Number\n";
}

/*
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
*/
$summation = 0;
for($i = 1; $i <= 100; $i++){
    $summation += $i;
}
echo "<br>The summation of the series 1+2+3...100 is: {$summation}";

?>