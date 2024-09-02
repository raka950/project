<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3c2b98b98b.js" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>FILE MANAGEMENT SYSTEM</h1>
            <button class="login-button" onclick="location.href='index2.php'">Logout</button>
        </header>
        <div class="main-content">
            <aside class="sidebar">
                <ul id="categoryList">
                    <li><a href="subcategory.php?category=railway-board">Railway Board</a></li>
                    <li><a href="subcategory.php?category=accounts">Accounts</a></li>
                    <li><a href="subcategory.php?category=personnel">Personnel</a></li>
                    <li><a href="subcategory.php?category=sandt">S&T</a></li>
                    <li><a href="subcategory.php?category=rpf">RPF</a></li>
                    <li><a href="subcategory.php?category=commercial">Commercial</a></li>
                    <li><a href="subcategory.php?category=operating">Operating</a></li>
                    <li><a href="subcategory.php?category=mechanical">Mechanical</a></li>
                </ul>
                <div class="add-category">
                    <button>+</button>
                    <form id="addCategoryForm" class="hidden">
                        <input type="text" id="newCategoryName" placeholder="Enter category/department name">
                        <button type="" class="submit-button">Submit</button>
                    </form>
                </div>
            </aside>
            
            <section class="content">
                <div id="dynamicContent">
                    <h2>Welcome to the File Management System</h2>
                    <p>Select a category from the left to manage files.</p>
                </div>
            </section>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>