<?php
// create_category.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Insert the new category into the database
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $categoryName);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'categoryName' => $categoryName]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to create category']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>

