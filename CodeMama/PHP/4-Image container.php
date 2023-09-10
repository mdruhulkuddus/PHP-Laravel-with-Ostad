<?php
    # Write your PHP code from here
     fscanf(STDIN, "%d", $width);
    $left = $width < 1000 ? (1000 - $width) / 2 : 0;
    echo $left;
?>