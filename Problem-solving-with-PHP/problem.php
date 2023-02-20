<?php
$t = (int) fgets(STDIN);
for ($i = 0; $i < $t; $i++) {

    list($d1, $d2) = explode(" ", fgets(STDIN));
    list($p, $pro) = explode(" ", fgets(STDIN));

    $amount = $p * min($d1, $d2);
    $ex = $p % ($pro + 1);
    $kilo = $p / ($pro + 1);
    $amount2 = ($ex * min($d1, $d2)) + ((int)$kilo * $pro * $d1);

    echo min($amount, $amount2) . "\n";
}
