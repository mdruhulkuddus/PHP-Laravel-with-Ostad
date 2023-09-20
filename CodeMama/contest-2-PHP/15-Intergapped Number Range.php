<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d%d%d%d", $l1, $r1, $l2, $r2);
    for($i = $l1; $i < $l2; $i++){
        echo $i." ";
    }
    for($i = $r2+1; $i <= $r1; $i++){
        echo $i." ";
    }
?>