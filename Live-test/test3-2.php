<?php
function hasSum($arr, $sum){
    for($i = 0; $i < count($arr); $i++)
    {
        for($j = $i + 1; $j < count($arr); $j++)
        {
            if($arr[$i] + $arr[$j] == $sum) {
                return true;
            }
        }
    }
    return false;
}

$arr = array(5,7,1,2,8,4,3);
$sum = 8; // 14 is not exits

if(hasSum($arr, $sum)){
    echo "True: ".$sum." is exists";
}
else{
    echo "False: ".$sum." is not exists";
}


