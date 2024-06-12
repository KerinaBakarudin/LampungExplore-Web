<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "lampungexplore";
    $mysqli = mysqli_connect($host, $user, $pass, $db);

    if(!$mysqli) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }