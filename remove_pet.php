<?php
session_start();

include 'dbconn.php';

if (isset($_POST["submit-remove"])) {
    $pet_id = $_POST["pet_id"];

    $delete_query = "DELETE FROM pets WHERE pet_id = '$pet_id'";
    $result = mysqli_query($con, $delete_query);

    if ($result) {
        echo "<script>alert('Pet removed successfully');</script>";
        header("location: profile.php");
        exit;
    } else {
        echo "<script>alert('Error removing pet');</script>";
    }
}
?>
