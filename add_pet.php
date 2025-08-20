<?php
session_start();
// Include the session start and other common code here

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

// Include database connection
include 'dbconn.php';

if (isset($_POST["submit-add"])) {

    $filename = $_FILES["pet_img"]["name"];
    $tempname = $_FILES["pet_img"]["tmp_name"];
    $folder = "db_img/".$filename;
    move_uploaded_file($tempname, $folder);



    $user_id = $_SESSION['user_id'];
    $pet_name = $_POST["pet_name"];
    $pet_type = $_POST["pet_type"];
    $gender = $_POST["gender"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $vaccination = $_POST["vaccination"];
    $good_with_kids = $_POST["good_with_kids"];

    // Insert the new pet into the database
    $insert_query = "INSERT INTO pets (`user_id`, `pet_img`, `pet_name`, `pet_type`, `gender`, `breed`, `age`, `vaccination`, `good_with_kids`) VALUES ('$user_id', '$folder', '$pet_name', '$pet_type', '$gender', '$breed', '$age', '$vaccination', '$good_with_kids')";
    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "<script>alert('Pet added successfully');</script>";
        header("location: profile.php");
        exit;
    }
}
?>
