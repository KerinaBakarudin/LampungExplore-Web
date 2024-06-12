<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: ../dashboard.php");
} else {
    header("Location: ../login.php");
}

mysqli_close($mysqli);
?>
