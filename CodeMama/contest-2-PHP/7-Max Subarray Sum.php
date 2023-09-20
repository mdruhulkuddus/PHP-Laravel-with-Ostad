<?php
// Function to find the maximum subarray sum
function maxSubarraySum($arr) {
    $n = count($arr);
    $maxSum = $arr[0]; // Initialize with the first element of the array
    $currentSum = $arr[0]; // Initialize current sum with the first element

    for ($i = 1; $i < $n; $i++) {
        // Calculate the maximum between the current element and the current element plus current sum
        $currentSum = max($arr[$i], $currentSum + $arr[$i]);

        // Update the maximum sum
        $maxSum = max($maxSum, $currentSum);
    }

    return $maxSum;
}

// Read input N
$n = intval(trim(fgets(STDIN)));

// Read the array of integers as a string and convert it to an array
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Find and print the maximum subarray sum
echo maxSubarraySum($arr);
?>
