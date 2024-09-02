<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System - Documents</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3c2b98b98b.js" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="documents-page">
    <div class="dashboard-container">
        <header>
            <h1>FILE MANAGEMENT SYSTEM</h1>
            <button class="login-button" onclick="location.href='index2.php'">Logout</button>
        </header>
        <div class="main-content">
            <aside class="sidebar">
                <ul id="categoryList">
                    <li><a href="dashboard.php">Railway Board</a></li>
                    <li><a href="dashboard.php">Accounts</a></li>
                    <li><a href="dashboard.php">Personnel</a></li>
                    <li><a href="dashboard.php">S&T</a></li>
                    <li><a href="dashboard.php">RPF</a></li>
                    <li><a href="dashboard.php">Commercial</a></li>
                    <li><a href="dashboard.php">Operating</a></li>
                    <li><a href="dashboard.php">Mechanical</a></li>
                </ul>
            </aside>
            <section class="content">
                <h2 id="subcategoryTitle"></h2>
                <table id="documentTable"></table>
                <button onclick="addDocument()">ADD ROW</button>
                <button onclick="saveDocuments()">SAVE</button>
            </section>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>