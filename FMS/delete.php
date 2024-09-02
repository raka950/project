<?php
require_once("connection.php");

if (isset($_GET['file_id'])) {
    $id = intval($_GET['file_id']); // Using intval for better security

    // Fetch file to delete from database
    $sql = "SELECT * FROM upload_files WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) == 1) {
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['NAME'];

        // Delete the file from the filesystem
        if (file_exists($filepath)) {
            unlink($filepath);
        }

        // Delete the file record from the database
        $deleteQuery = "DELETE FROM upload_files WHERE ID = ?";
        $deleteStmt = mysqli_prepare($conn, $deleteQuery);
        mysqli_stmt_bind_param($deleteStmt, "i", $id);
        mysqli_stmt_execute($deleteStmt);

        if (mysqli_stmt_affected_rows($deleteStmt) > 0) {
            echo "File deleted successfully.";
        } else {
            echo "Failed to delete file from the database.";
        }
    } else {
        echo "File not found in the database.";
    }
} else {
    echo "No file ID specified.";
}

// Redirect back to the index page
header("Location: category.php");
exit;
?>
