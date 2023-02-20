<?php

function LongestWordOfString($string) {
   
    $words = explode(' ', $string);
    $longest_word = $words[0];
    for ($i = 1; $i < count($words); $i++) {
        if (strlen($words[$i]) > strlen($longest_word)) {
            $longest_word = $words[$i];
        }
    }
    return $longest_word;
}

$str = "The quick brown fox jumped over the lazy dog";
$longest_word_of_string = LongestWordOfString($str);
echo "The longest word of the string is: " . $longest_word_of_string;

?>