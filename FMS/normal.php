<?php
require_once("connection.php");

// Function to generate UUID
function generateUUID() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

// Handle file upload
if (isset($_POST['upload'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $uploadDir = 'uploads/';

        // Get custom name and description from the form
        $customName = isset($_POST['custom_name']) ? $_POST['custom_name'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $targetTable = isset($_POST['target_table']) ? $_POST['target_table'] : '';
        $uuid = generateUUID();

        if (!empty($targetTable)) {
            // Move the file to the uploads directory
            if (move_uploaded_file($fileTmpName, $uploadDir . $fileName)) {
                // Insert file info into the database
                $sql = "INSERT INTO $targetTable (ID, NAME, DOWNLOAD, custom_name, description, upload_date) VALUES (?, ?, 0, ?, ?, NOW())";
                $stmt = $conn->prepare($sql);
                if ($stmt) {
                    $stmt->bind_param("ssss", $uuid, $fileName, $customName, $description);
                    $stmt->execute();

                    if ($stmt->affected_rows > 0) {
                        echo "File uploaded successfully.";
                    } else {
                        echo "Failed to insert file information into the database.";
                    }
                } else {
                    echo "Failed to prepare the statement: " . $conn->error;
                }
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            echo "Target table is not specified.";
        }
    } else {
        echo "Error: " . $_FILES['file']['error'];
    }
}

// Handle file deletion
if (isset($_GET['delete_id']) && isset($_GET['target_table'])) {
    $deleteId = $_GET['delete_id'];
    $targetTable = $_GET['target_table'];
    $sql = "DELETE FROM $targetTable WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $deleteId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "File deleted successfully.";
        } else {
            echo "Failed to delete the file.";
        }
    } else {
        echo "Failed to prepare the statement: " . $conn->error;
    }
}

// Fetch all files from both tables
$sql = "
    SELECT 'upload_files' as table_name, ID, NAME, custom_name, description, upload_date FROM upload_files
    UNION
    SELECT 'upload_files1' as table_name, ID, NAME, custom_name, description, upload_date FROM upload_files1
    ORDER BY upload_date DESC
";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error fetching data: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Upload a File</h1>
        <form action="index.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="file">Select file to upload:</label><br>
            <input type="file" name="file" id="file"><br>
            <label for="custom_name">Enter custom name for the file:</label><br>
            <input type="text" name="custom_name" id="custom_name"><br>
            <label for="description">Enter file description:</label><br>
            <input type="text" name="description" id="description"><br>
            <label for="target_table">Select target table:</label><br>
            <select name="target_table" id="target_table">
                <option value="upload_files">Table 1</option>
                <option value="upload_files1">Table 2</option>
            </select><br>
            <input type="submit" value="Upload File" name="upload" class="upload-btn">
        </form>

        <h1>Available Files for Download</h1>
        <table class="file-table">
            <thead>
                <tr>
                    <th>Unique ID</th>
                    <th>File Name</th>
                    <th>Custom Name</th>
                    <th>Description</th>
                    <th>Upload Date</th>
                    <th>Delete Link</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><a href="download.php?file_id=<?php echo $row['ID']; ?>&table=<?php echo $row['table_name']; ?>" class="download-link"><?php echo $row['NAME']; ?></a></td>
                        <td><?php echo htmlspecialchars($row['custom_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                        <td><?php echo $row['upload_date']; ?></td>
                        <td><a href="index.php?delete_id=<?php echo $row['ID']; ?>&target_table=<?php echo $row['table_name']; ?>" onclick="return confirm('Are you sure you want to delete this file?');" class="delete-link">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <style>
/* style.css */
/* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 90%;
    max-width: 900px;
    margin: auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h1, h2 {
    text-align: center;
    color: #333;
    margin-bottom: 2px;
}

form.upload-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 30px;
}

form.upload-form label {
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

form.upload-form input[type="file"],
form.upload-form input[type="text"],
form.upload-form select {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 10px;
}

form.upload-form .upload-btn {
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

form.upload-form .upload-btn:hover {
    background-color: #0056b3;
}

table.file-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 25px;
}

table.file-table th, 
table.file-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

table.file-table th {
    background-color: #007bff;
    color: #fff;
}

table.file-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table.file-table .download-link {
    color: #007bff;
    text-decoration: none;
}

table.file-table .delete-link {
    color: #ff0000;
    text-decoration: none;
}

table.file-table .delete-link:hover {
    text-decoration: underline;
}

.next-page-link {
    text-align: center;
    margin-top: 30px;
}


</style>

</body>
</html>