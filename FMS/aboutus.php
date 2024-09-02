<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3c2b98b98b.js" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>About Us - File Management System</title>
    <style>
        body {
            font-family: 'Kumbh Sans', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #7ba7d9;
            background:linear-gradient(to right, #7aafe9 0%, #bfd4eb 100%);
        }
        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
            padding: 20px;
        }
        header {
            background: #000000;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #0779e4 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        .content {
            padding: 20px;
            background:linear-gradient(to right, #7aafe9 0%, #bfd4eb 100%);
        }
        .content h2 {
            color: #000000;
        }
        footer {
            background: #000000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            transition: color 0.3s; /* Transition effect */
        }

        nav ul li a:hover {
            color: rgb(25, 0, 255); /* Change text color on hover */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>File Management System</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index2.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <h2>About Us</h2>
            <p>Welcome to our File Management System! Our system is designed to help individuals and businesses manage their files efficiently and securely.</p>
            <h3>Our Mission</h3>
            <p>Our mission is to provide a robust and user-friendly platform that simplifies file management, enhances collaboration, and ensures the security of your data.</p>
            <h3>Features</h3>
            <ul>
                <li>Easy file upload and download</li>
                <li>Secure file storage with encryption</li>
                <li>Collaborative tools for sharing and editing files</li>
                <li>Version control and backup</li>
                <li>Access from any device</li>
            </ul>
            <h3>Our Team</h3>
            <p>We are a group of passionate developers, designers, and tech enthusiasts dedicated to creating the best file management solutions. Our team is committed to continuous improvement and innovation.</p>
            <h3>Contact Us</h3>
            <p>If you have any questions or would like to learn more about our system, please <a href="contact.php">contact us</a>. We would love to hear from you!</p>
        </div>
    </div>

    <footer>
        <p>File Management System &copy; 2024</p>
    </footer>
</body>
</html>