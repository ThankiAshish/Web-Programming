<?php
    session_start();
    include_once "./config.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['uid'] = $row['uid'];
        header("location: ../index.php");
    } else {
        header("location: ../Views/login.php");
    }
?>
