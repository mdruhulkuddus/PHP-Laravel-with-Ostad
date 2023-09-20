<?php
    # Write your PHP code from here
    $dresCode = trim(fgets(STDIN));
    $temparature = intval(trim(fgets(STDIN)));
    if($dresCode == "casual" && ($temparature >= 15 && $temparature <= 25)){
        echo "Jeans and a light jacket.";
    }
    else if($dresCode == "festive" && $temparature > 25 ){
        echo "Colorful dress and sandals.";
    }
    else{
        echo "Wear what you're comfortable in.";
    }
?>