<?php
    session_start();
    if(isset($_SESSION['uid'])) {
        include_once "../Config/config.php";
        session_unset();
        session_destroy();
    }
    header("location: ../Views/login.php");
?>
