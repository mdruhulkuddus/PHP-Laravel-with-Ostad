<?php
// Read input
$N = intval(fgets(STDIN));
$intervals = [];
for ($i = 0; $i < $N; $i++) {
    list($l, $r) = explode(" ", trim(fgets(STDIN)));
    $intervals[] = [$l, $r];
}

// Sort intervals by start time
usort($intervals, function ($a, $b) {
    return $a[0] - $b[0];
});

// Merge overlapping intervals
$result = [];
foreach ($intervals as $interval) {
    if (empty($result) || $interval[0] > $result[count($result) - 1][1]) {
        // Non-overlapping interval or empty result array
        $result[] = $interval;
    } else {
        // Overlapping interval, merge with the last interval in the result
        $result[count($result) - 1][1] = max($result[count($result) - 1][1], $interval[1]);
    }
}

// Print merged intervals
foreach ($result as $interval) {
    echo $interval[0] . " " . $interval[1] . "\n";
}
?>
