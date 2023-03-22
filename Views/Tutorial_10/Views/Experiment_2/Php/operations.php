<?php
    include_once "./config.php";

    if(isset($_POST['insert'])) {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $query = "INSERT INTO students VALUES ('$id', '$firstName', '$lastName')";
        $result = mysqli_query($conn, $query);
    
        if(!$result) echo "Failed to Enter Details";
        else header('location: ../index.php');
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        echo $query = "UPDATE students SET first_name = '$firstName', last_name = '$lastName' WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result) echo "Failed to Update Details";
        else header('location: ../index.php');
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        echo $query = "DELETE FROM students WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result) echo "Failed to Delete Details";
        else header('location: ../index.php');
    }
?>