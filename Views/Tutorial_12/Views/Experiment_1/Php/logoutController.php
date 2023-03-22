<?php
if (isset($_COOKIE['username'])) {
    include_once "../Config/config.php";
    session_unset();
    session_destroy();
    unset($_COOKIE['username']);
    setcookie('username', FALSE, -1, '/');
}
header("location: ../Views/login.php");
