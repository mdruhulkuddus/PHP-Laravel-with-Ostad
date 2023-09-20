<?php
    # Write your PHP code from here
    function fact($n){
        if($n == 0) return 1;
        return $n * fact($n - 1);
    }

    fscanf(STDIN,"%d", $n);
    
    echo fact($n);
?>