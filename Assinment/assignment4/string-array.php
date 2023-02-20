<?php
/* 
1.Write a PHP function to sort an array of strings by their length, in ascending order.  */

$array = ['sam', 'rahim', 'jabbar', 'atikunabi', 'ruhulkuddus'];

usort($array, function($a, $b){
    return strlen($a) > strlen($b);
});

print_r($array);

/* 
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.*/

function concat_string($str1, $str2){
    return $str1.$str2;
}

echo concat_string('Hellow', 'World');

echo "\n";
/* 
3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.*/

function removeFirstAndLastElement($arr)
{
    array_shift($arr);
    array_pop($arr);
    return $arr;
}
$arr = [5, 4, 8, 9, 10, 15];
$modifiedArray = removeFirstAndLastElement($arr);
print_r($modifiedArray);

/* 
4.Write a PHP function to check if a string contains only letters and whitespace.*/

function isLetterAndWhiteSpace($string){
    return preg_match('/^[A-Za-z\s]+$/', $string);
}

$str1 = 'contains_underscore'; 
$str2 = 'only letters and spaces';
echo isLetterAndWhiteSpace($str1); // false
echo "\n";
echo isLetterAndWhiteSpace($str2);  // true
echo "\n";
/* 
5.Write a PHP function to find the second largest number in an array of numbers. */

function secondLargestNumber($numbers){
    rsort($numbers);
    return $numbers[1];
}
$numbers = [5, 4, 8, 9, 10, 15];
echo "Second largest number is : ". secondLargestNumber($numbers);