<?php
session_start();
include('db_connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $fetch_info = mysqli_fetch_array($result);
        $hashed_password = $fetch_info['password'];
        if(password_verify($password, $hashed_password)) {
            $_SESSION['message'] =  "Successfully Login";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['message'] =  "Password did not Match!";
            header("Location: login.php");
            exit();
        }
    }else {
        $_SESSION['message'] =  "User Not Find!";
        header("Location: login.php");
        exit();
    }
}
