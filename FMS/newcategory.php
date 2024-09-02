<?php
// Backend PHP code

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoryName'])) {
    // Assuming you have a database connection file
    include 'connection.php';

    $categoryName = $_POST['categoryName'];

    // Validate the category name
    if (empty($categoryName)) {
        echo json_encode(['status' => 'error', 'message' => 'Category name is required']);
        exit;
    }

    // Check if the category already exists
    $stmt = $conn->prepare("SELECT * FROM categories WHERE name = ?");
    $stmt->bind_param("s", $categoryName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Category already exists']);
        exit;
    }

    // Insert the new category into the categories table
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $categoryName);

    if ($stmt->execute()) {
        // Create a new table for the category
        $tableName = preg_replace('/\s+/', '_', strtolower($categoryName)); // Replace spaces with underscores
        $createTableSql = "CREATE TABLE $tableName (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            item_name VARCHAR(255) NOT NULL,
            item_description TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if ($conn->query($createTableSql) === TRUE) {
            echo json_encode(['status' => 'success', 'message' => 'Category and table created successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to create table: ' . $conn->error]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to create category']);
    }

    $stmt->close();
    $conn->close();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['fetch'])) {
    // Fetch categories
    include 'connection.php';

    $sql = "SELECT name FROM categories";
    $result = $conn->query($sql);

    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }

    echo json_encode($categories);

    $conn->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Categories</h2>
    <ul id="categoryList" class="list-group mb-4">
        <!-- Categories will be appended here by JavaScript -->
    </ul>

    <h4>Add New Category</h4>
    <div id="addCategoryFormContainer">
        <input type="text" id="newCategoryName" placeholder="Enter category name" class="form-control my-2">
        <button type="button" id="submitCategoryButton" class="btn btn-primary btn-block">Submit</button>

    </div>
</div>

<script>
    $(document).ready(function() {
        // Function to fetch and display categories
        function fetchCategories() {
            $.ajax({
                url: 'newcategory.php?fetch=1',
                type: 'GET',
                success: function(response) {
                    try {
                        var categories = JSON.parse(response);
                        $('#categoryList').empty();
                        categories.forEach(function(category) {
                            $('#categoryList').append('<li class="list-group-item">' + category.name + '</li>');
                        });
                    } catch (e) {
                        console.error('Error parsing JSON:', e);
                        alert('Error fetching categories.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX error:', textStatus, errorThrown);
                    alert('An error occurred while fetching categories.');
                }
            });
        }

        // Fetch categories on page load
        fetchCategories();

        $('#submitCategoryButton').click(function() {
            var categoryName = $('#newCategoryName').val();
            console.log('Category Name:', categoryName); // Debugging line
            if (categoryName) {
                $.ajax({
                    url: 'newcategory.php',
                    type: 'POST',
                    data: { categoryName: categoryName },
                    success: function(response) {
                        console.log('Response:', response); // Debugging line
                        try {
                            var result = JSON.parse(response);
                            if (result.status === 'success') {
                                fetchCategories(); // Refresh the list of categories
                                $('#newCategoryName').val('');
                                alert('Category created successfully.');
                            } else {
                                alert('Error: ' + result.message);
                            }
                        } catch (e) {
                            console.error('Error parsing JSON:', e);
                            alert('Error processing the response.');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX error:', textStatus, errorThrown);
                        alert('An error occurred while creating the category.');
                    }
                });
            } else {
                alert('Please enter a category name.');
            }
        });
    });
</script>

</body>
</html>
