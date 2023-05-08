<?php
session_start();
include('db_connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        $_SESSION['message'] = "Password and Confirm Password do not match.";
        header("Location: registration.php");
        exit();
    } else {
        $sql = "SELECT * FROM registration WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] =  "This email already taken, Input new Email";
            header("Location: registration.php");
            exit();
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO registration (`first_name`, `last_name`, `email`, `password`, `confirm_password`) VALUES ('$first_name', '$last_name', '$email', '$hashed_password', '$hashed_password')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Registration successfully done.";
                header("Location: registration.php");
                exit();
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($conn);
                header("Location: registration.php");
                exit();
            }
        }
    }
}
