<?php
function findWinner(&$arr) {
    $n = count($arr);
    $dp = [];

    // Initialize dp array with 0s
    for ($i = 0; $i < $n; $i++) {
        $dp[$i][$i] = $arr[$i];
    }

    for ($len = 2; $len <= $n; $len++) {
        for ($i = 0; $i <= $n - $len + 1; $i++) {
            $j = $i + $len - 1;
            $first = $arr[$i] - $dp[$i + 1][$j];
            $second = $arr[$j] - $dp[$i][$j - 1];

            $dp[$i][$j] = max($first, $second);
        }
    }

    $totalSum = array_sum($arr);
    $friend1Score = ($totalSum + $dp[0][$n - 1]) / 2;
    $friend2Score = ($totalSum - $dp[0][$n - 1]) / 2;

    if ($friend1Score > $friend2Score) {
        return 1;
    } elseif ($friend2Score > $friend1Score) {
        return 2;
    } else {
        return 3; // Tie
    }
}


// Get the input.
$n = fgets(STDIN);
$arr = explode(" ", trim(fgets(STDIN)));
echo findWinner($arr);