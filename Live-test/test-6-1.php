<?php

$file_name = "ostad.txt";

if (file_exists($file_name))
{

    $file = fopen($file_name, "r+");
    $file_contents = fread($file, filesize($file_name));
    fseek($file, 0);
    $current_date = date("Y-m-d H:i:s");
    $updated_contents = $file_contents . "\n" . $current_date;
    fwrite($file, $updated_contents);
    fclose($file);
} 
else 
{
    $file = fopen($file_name, "w");
    $current_date = date("Y-m-d H:i:s");
    fwrite($file, $current_date);
    fclose($file);
}

?>
