<?php
session_start();
include "koneksi.php";

if (isset($_POST['create-acc'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $phone_number = mysqli_real_escape_string($mysqli, $_POST['phone_number']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    $check_query = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($check_query) > 0) {
        header('Location: ../register.php');
        exit();
    }

    $query_insert = mysqli_query($mysqli, "INSERT INTO users (name, phone_number, username, password) VALUES ('$name', '$phone_number', '$username', '$password')");

    if ($query_insert) {
        header('Location: ../login.php');
        exit(); 
    } else {
        echo "Error: " . mysqli_error($mysqli);
        header('Location: register.php');
    }
}
?>
