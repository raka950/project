<?php
require_once("connection.php");

if (isset($_POST['upload'])) {
    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $uploadDir = 'uploads/';

        // Move the file to the uploads directory
        if (move_uploaded_file($fileTmpName, $uploadDir . $fileName)) {
            // Insert file info into the database
            $sql = "INSERT INTO upload_files (NAME, DOWNLOAD) VALUES (?, 0)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $fileName);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                alert("File uploaded successfully.") ;
            } else {
                alert("Failed to insert file information into the database.");
            }
        } else {
            alert("Failed to move uploaded file.");
        }
    } else {
        echo "Error: " . $_FILES['file']['error'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload File" name="upload">
    </form>
</body>
</html>
