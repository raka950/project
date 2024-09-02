<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Uploading in PHP</title>
</head>
<body>
    <h1>File Uploading in PHP</h1>
    <form action="file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile" required>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    require_once("connection.php");

    if (isset($_POST['upload'])) {
        $filename = $_FILES['myfile']['name'];
        $tempname = $_FILES['myfile']['tmp_name'];
        $destination = 'upload/' . $filename;

        if (move_uploaded_file($tempname, $destination)) {
            echo "File uploaded successfully!<br>";

            // Insert file info into database
            $sql = "INSERT INTO uploaded_files (file_name, file_path) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $filename, $destination);

            if ($stmt->execute()) {
                echo "File info saved to database.<br>";
            } else {
                echo "Error: " . $stmt->error . "<br>";
            }
        } else {
            echo "Failed to upload file.<br>";
        }
    }

    // Fetch and display uploaded files
    $sql = "SELECT file_name, file_path FROM uploaded_files";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Uploaded Files:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='" . $row['file_path'] . "' download>" . $row['file_name'] . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "No files uploaded yet.";
    }

    $conn->close();
    ?>
</body>
</html>