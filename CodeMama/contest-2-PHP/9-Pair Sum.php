<?php
    # Write your PHP code from here

    function findPair(&$arr, $n, $s){
        $seen = [];
        for($i = 0; $i < $n; $i++){
            $rem = $s - $arr[$i];
            if(isset($seen[$rem])){
                return true;
            }else{
                $seen[$arr[$i]] = true;
            }
        }
       // print_r($seen);
        return false;
    }

    fscanf(STDIN, "%d%d", $n,$s);
    $str = fgets(STDIN);
    $arr = explode(" ", trim($str));
    if(findPair($arr, $n, $s))
     echo "Yes";
     else echo "No";

    // $f = 0;
    // $seen = [];
    // for($i = 0; $i < $n; $i++){

    //     for($j = $i + 1; $j < $n; $j++ ){
    //         if($arr[$i] + $arr[$j] == $s)
    //         {
    //             echo "Yes"; $f = 1; break;
    //         }
    //     }
    //     if($f) break;
    // }
    // if(!$f) echo "No";
?>