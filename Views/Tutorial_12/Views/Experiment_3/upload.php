<?php
include_once "config.php";

if (isset($_POST['upload'])) {
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "./Images/" . $filename;

    $query = "INSERT INTO images (image_name) VALUES ('$filename')";
    $sql = mysqli_query($conn, $query);

    if (move_uploaded_file($tempname, $folder)) {
        $message = "$filename Uploaded Successfully!";
    } else {
        $message = "Something Went Wrong!";
    }
    header("location: ./index.php?message=$message");
}
