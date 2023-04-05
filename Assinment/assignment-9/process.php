<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ostad");
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $subject = $_POST['txtPhone'];
    $message = $_POST['txtMsg'];
    
    // Check if passwords match
    if (empty($name) && empty($email)) {
        $_SESSION['message'] = "Please fill all required fields";
        header("Location: contact.php");
        exit();
    } else {
            $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Message successfully sent.";
                header("Location: contact.php");
                exit();
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($conn);
                header("Location: contact.php");
                exit();
            }
        }
    }
