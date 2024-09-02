<?php
session_start();
require("connection.php");

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query = "DELETE FROM `login` WHERE `username` = '$username'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('User deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting user');</script>";
    }

    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
