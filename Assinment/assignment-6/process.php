<?php
session_start();

// Validate form inputs
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_pic'])) {
    die('All field are required, please fill all fields');
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   die('Invalid email, input valid mail');
}

// Save profile picture to the server
$targetDir = "uploads/";
$targetFile = uniqid().'_' . date('YmdHis') . '_' . basename($_FILES["profile_pic"]["name"]);
if(!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetDir.$targetFile)) {
   die('Error to upload file');
}

// Save user's name, email, and profile picture filename to a CSV file
$userData = array($_POST['name'], $_POST['email'], $targetFile);
$file = fopen("users.csv", "a");
if(fputcsv($file, $userData) == false){
    die('Error writing file in csv');
}
fclose($file);

// Set cookie with user's name
session_start();
setcookie("username", $_POST['name']);

header("Location: show.php");
exit();
?>
