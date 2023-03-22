<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "tutorial_10";

    $conn = mysqli_connect($hostname, $user, $password, $database);
    if(!$conn) echo "Failed Connecting to Database " . mysqli_connect_error();
?>