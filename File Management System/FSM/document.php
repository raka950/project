<?php
// Handle file upload before any HTML content is sent
if (isset($_POST['upload'])) {
    $filename = $_FILES['myfile']['name'];
    $tempname = $_FILES['myfile']['tmp_name'];
    $destination = 'upload/' . $filename;

    if (move_uploaded_file($tempname, $destination)) {
        // Insert file info into database
        require_once("connectdatabase.php");
        $sql = "INSERT INTO uploaded_files (file_name, file_path) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $filename, $destination);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // Redirect to avoid resubmission
        header("Location: document.php?upload_success=true");
        exit();
    } else {
        $upload_error = true;
    }
}

// Handle file deletion
if (isset($_GET['delete'])) {
    $fileId = $_GET['delete'];
    require_once("connectdatabase.php");

    // Get file path from database
    $sql = "SELECT file_path FROM uploaded_files WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    // Delete file from directory
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    // Delete file record from database
    $sql = "DELETE FROM uploaded_files WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect to avoid resubmission
    header("Location: document.php?delete_success=true");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 200px;
            border-right: 1px solid #ccc;
            padding: 10px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar li {
            margin: 10px 0;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .login-button {
            padding: 5px 10px;
            cursor: pointer;
        }
        .add-category {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .add-category input {
            padding: 5px;
            margin-bottom: 10px;
            width: calc(100% - 12px);
        }
        .add-category button {
            padding: 5px 10px;
        }
        .back-button {
            position: absolute;
            top: 10px;
            right: 20px;
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        .document-link {
            position: relative;
            text-decoration: none;
            color: #007BFF;
        }
        .document-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 2px;
            background: #007BFF;
            transition: width .3s;
        }
        .document-link:hover::after {
            width: 100%;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .button-container button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-container button:hover {
            background-color: #0056b3;
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .delete-icon {
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>FILE MANAGEMENT SYSTEM</h1>
    <button class="back-button" onclick="goBack()">Back</button>
</div>

<div class="container">
    <div class="sidebar">
        <ul id="category-list">
            <li>Railway Board</li>
            <li>Accounts</li>
            <li>Personnel</li>
            <li>S&T</li>
            <li>RPF</li>
            <li>COMMERCIAL</li>
            <li>OPERATING</li>
            <li>MECHANICAL</li>
        </ul>
        <div class="add-category">
            <input type="text" id="new-category" placeholder="CATEGORY/DEPARTMENT NAME">
            <button onclick="addCategory()">SUBMIT</button>
        </div>
    </div>
    <div class="content">
        <?php if (isset($_GET['upload_success'])): ?>
            <div class="message success">File uploaded successfully!</div>
        <?php elseif (isset($upload_error) && $upload_error): ?>
            <div class="message error">Failed to upload file.</div>
        <?php elseif (isset($_GET['delete_success'])): ?>
            <div class="message success">File deleted successfully!</div>
        <?php endif; ?>
        
        <h2>Railway Board > Policy > 2024</h2>
        <form action="document.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" required>
            <input type="submit" name="upload" value="Upload">
        </form>
        <h2>Available Files for Download</h2>
        <table id="document-table">
            <thead>
                <tr>
                    <th>SL NO.</th>
                    <th>DATE OF PUBLISH</th>
                    <th>SUBJECT</th>
                    <th>DOCUMENT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("connectdatabase.php");
                $sql = "SELECT id, file_name, file_path FROM uploaded_files";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $slNo = 1;
                    while ($row = $result->fetch_assoc()) {
                        $fileModificationTime = date('d.m.Y', filemtime($row['file_path']));
                        echo '<tr>';
                        echo '<td>' . $slNo++ . '</td>';
                        echo '<td>' . $fileModificationTime . '</td>';
                        echo '<td contenteditable="true">Uploaded File</td>';
                        echo '<td><a href="' . $row['file_path'] . '" class="document-link">' . $row['file_name'] . '</a></td>';
                        echo '<td><a href="document.php?delete=' . $row['id'] . '" class="delete-icon">Delete</a></td>';
                        echo '</tr>';
                    }
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function addCategory() {
        const categoryInput = document.getElementById('new-category');
        const categoryList = document.getElementById('category-list');
        
        if (categoryInput.value.trim() !== '') {
            const newCategory = document.createElement('li');
            newCategory.textContent = categoryInput.value;
            categoryList.appendChild(newCategory);
            categoryInput.value = '';
        }
    }

    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
