<?php

$student = array(
    array(1, "Rakib", "Marks 90"),
    array(1, "Sakib", "Marks 80"),
);

var_dump($student);

foreach($student as $eachStudent){
    foreach($eachStudent as $eachItem){
        echo $eachItem . "<br>";
    }
}
