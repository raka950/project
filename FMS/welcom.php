<?php
include('connection.php');  // Ensure the database connection file is included

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // Redirect to welcome.php after successful login
            header("Location:index .php");
            exit();  // Ensure script stops after redirection
        } else {
            echo '<script>
                      alert("Login failed. Invalid username or password!!");
                      window.location.href = "index.php";
                  </script>';
        }
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    }
}
?>
