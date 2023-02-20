<?php
// Read the number of test cases
$t = (int) fgets(STDIN);
for ($i = 0; $i < $t; $i++) {
    // Read the prices of 1 kilo of potatoes on the first and second days

       list($d1, $d2) = explode(" ", fgets(STDIN));
       list($p, $pro) = explode(" ", fgets(STDIN));
    //list($d1, $d2) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // Read the required amount of potatoes to buy and the amount of potatoes to use the promotion
   // list($p, $pro) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // Calculate the minimum number of coins to spend
    $amount = $p * min($d1, $d2);
    $ex = $p % ($pro + 1);
    $kilo = $p / ($pro + 1);
    $amount2 = ($ex * min($d1, $d2)) + ((int)$kilo * $pro * $d1);

    echo min($amount, $amount2)."\n";
}
?>