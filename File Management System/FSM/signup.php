<?php 
session_start();
require("connection.php");

if (isset($_POST['SignUp'])) {
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];

    $query = "INSERT INTO `login` (`username`, `password`) VALUES ('$username', '$password')";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Signup successful'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Signup failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="" method="POST">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="password" name="user_password" placeholder="Password" required>
            <button type="submit" name="SignUp">Signup</button>
        </form>
    </div>
</body>
</html>
