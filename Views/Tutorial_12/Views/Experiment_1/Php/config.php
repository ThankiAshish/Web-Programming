<?php
$hostname  = "localhost";
$user = "root";
$password = "";
$database = "tutorial_11";

$conn = mysqli_connect($hostname, $user, $password, $database) or die("Database Connection Failed");
