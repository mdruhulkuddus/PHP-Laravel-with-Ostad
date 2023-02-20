<?php
/*
    long long int day1p, day2p, potato, promo;
        cin >> day1p >> day2p >> potato >> promo;
 
        long long int amount1 = potato * min(day1p, day2p);
        long long int extraKilo = potato % (promo + 1);
        long long int Kilo = potato / (promo + 1);
        long long int amount2 = extraKilo * min(day1p, day2p) + Kilo * promo * day1p;
       // long long int amount3 = potato * day2p;
*/
$t = (int) fgets(STDIN);
while($t--){
    fscanf(STDIN, "%d%d%d%d", $d1, $d2, $p, $pro);
    echo $d1;
    $amount = $p * min($d1 , $d1);
    $ex = $p % ($pro + 1);
    $kilo = $p / ($pro + 1);
    $amount2 = $ex * min($d1, $d2) + $kilo * $pro * $d1;

    echo min($amount, $amount2)."\n";
}