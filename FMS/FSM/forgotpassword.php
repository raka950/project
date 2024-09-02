<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #89CFF0, #E0FFFF); /* Light blue gradient background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            border: 1px solid black; /* Thin black border */
        }
        .container img {
            max-width: 70%; /* Adjusted width to fit within the container */
            height: auto;
            margin-bottom: 20px;
        }
        .container h2 {
            margin-top: 0;
            color: #007BFF; /* Light blue color */
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container input {
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }
        .container input:focus {
            border-color: #007BFF; /* Light blue color on focus */
        }
        .container button {
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="/forgot-password.php" method="post">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Send Reset Link</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];

            // This is where you would typically query your database to check if the email exists
            // and send a password reset email. For now, we'll just display a message.
            // Example:
            // if (emailExistsInDatabase($email)) {
            //     sendPasswordResetEmail($email);
            //     echo "<p style='color: green;'>A password reset link has been sent to your email.</p>";
            // } else {
            //     echo "<p style='color: red;'>This email is not registered in our system.</p>";
            // }

            // For demonstration purposes:
            echo "<p style='color: green;'>A password reset link has been sent to your email.</p>";
        }
        ?>
    </div>
</body>
</html>