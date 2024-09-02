<?php 
session_start();
require("connection.php");

if (isset($_POST['LogIn'])) {
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];
    $query = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Login successful'); window.location.href = 'filemanagement.php';</script>";
    } else {
        echo "<script>alert('Incorrect Username or Password');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            margin-top: 0;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #0056b3;
        }
        .container .links {
            display: flex;
            justify-content: space-between;
        }
        .container .links a {
            color: #007BFF;
            text-decoration: none;
        }
        .container .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="password" name="user_password" placeholder="Password" required>
            <button type="submit" name="LogIn">Login</button>
        </form>
        <div class="links">
            <a href="signup.php">Signup</a>
            <a href="forgotpassword.php">Forgot Password</a>
        </div>
    </div>
</body>
</html>
