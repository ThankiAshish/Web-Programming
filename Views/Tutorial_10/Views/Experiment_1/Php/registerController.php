<?php
    session_start();
    include_once "./config.php";

    echo $username = mysqli_real_escape_string($conn, $_POST['username']);
    echo $password = mysqli_real_escape_string($conn, $_POST['password']);
    echo $age = mysqli_real_escape_string($conn, $_POST['age']);
    echo $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    echo $city = mysqli_real_escape_string($conn, $_POST['city']);
    echo $state = mysqli_real_escape_string($conn, $_POST['state']);
    echo $country = mysqli_real_escape_string($conn, $_POST['country']);
    echo $profilePicture = mysqli_real_escape_string($conn, $_POST['profilePicture']);

    $sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '{$username}'");
    if(mysqli_num_rows($sql) > 0) {
        echo "<script>alert($username + ' Already Exists!');</script>";
        header("location: ../Views/login.php");
    }
    if(isset($profilePicture)) {
        $uid = bin2hex(random_bytes((32-(32%2))/2));
        $query = "INSERT INTO users (`uid`, `username`, `password`, `age`, `date_of_birth`, `city`, `state`, `country`, `profile_picture`) 
                                        VALUES ('{$uid}', '{$username}', '{$password}', '{$age}', '{$dateOfBirth}', '{$city}', '{$state}', '{$country}',  '{$profilePicture}')";
        $insert = mysqli_query($conn, $query);
        if($insert) {
            $user = mysqli_query($conn, "SELECT * FROM users WHERE uid = '{$uid}'");
            if(mysqli_num_rows($user) > 0) {
                $row = mysqli_fetch_assoc($user);
                $_SESSION['uid'] = $row['uid'];
                echo "<script>alert('Registration Successful!');</script>";
                header("location: ../index.php");

            }
        } else {
            echo "<script>alert($username + ' Already Exists!');</script>";
        }
    } else {
        echo "Profile Picture Shit";
    }
?>
