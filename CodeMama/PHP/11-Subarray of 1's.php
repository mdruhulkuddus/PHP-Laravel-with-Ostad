<?php
function findMaxConsecutiveOnes($nums) {
    $maxCount = 0; // Initialize the maximum count of consecutive ones.
    $currentCount = 0; // Initialize the current count of consecutive ones.

    foreach ($nums as $num) {
        if ($num == 1) {
            // If the current element is 1, increment the current count.
            $currentCount++;
        } else {
            // If the current element is 0, reset the current count to 0.
            $currentCount = 0;
        }

        // Update the maximum count if the current count is greater.
        $maxCount = max($maxCount, $currentCount);
    }

    return $maxCount; // Return the maximum count of consecutive ones.
}
    # Write your PHP code from here
    $n = intval(trim(fgets(STDIN)));
    $str = trim(fgets(STDIN));
    $arr = explode(" ", $str);

$maxlen = findMaxConsecutiveOnes($arr);
echo $maxlen;

?>