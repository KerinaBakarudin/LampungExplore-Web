<?php
    $host = "localhost";
    $port = 3307; 
    $user = "root";
    $pass = "";
    $db = "lampungexplore";
    $mysqli = mysqli_connect($host, $user, $pass, $db, $port);

    if(!$mysqli) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
 ?>