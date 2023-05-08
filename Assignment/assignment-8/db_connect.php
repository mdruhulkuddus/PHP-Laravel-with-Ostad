<?php
$conn = mysqli_connect("localhost", "root", "", "reginfo");

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>  