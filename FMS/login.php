<?php
session_start(); // Start the session

include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // If credentials are correct, set session variables
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        header("Location: index .php"); // Redirect to the homepage or dashboard
        exit;
    } else {
        // Redirect back to login page with an error message
        echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password!!");
              </script>';
        exit;
    }
}
?>
