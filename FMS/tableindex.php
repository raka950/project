<?php
require_once("connection.php");

// Handle file upload
if (isset($_POST['upload'])) {
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
                echo "File uploaded successfully.<br>";
            } else {
                echo "Failed to insert file information into the database.<br>";
            }
        } else {
            echo "Failed to move uploaded file.<br>";
        }
    } else {
        echo "Error: " . $_FILES['file']['error'] . "<br>";
    }
}

// Fetch all files from the database
$sql = "SELECT * FROM upload_files";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>File List</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload File" name="upload">
    </form>

    <h1>Available Files for Download</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>File Name</th>
            <th>Download Link</th>
            <th>Delete Link</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['NAME']; ?></td>
                <td><a href="download.php?file_id=<?php echo $row['ID']; ?>">Download</a></td>
                <td><a href="delete.php?file_id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this file?');">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
