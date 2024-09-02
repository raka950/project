<?php
require_once("connection.php");

function log_message($message) {
    error_log($message, 3, "download_errors.log");
}

if (isset($_GET['file_id']) && isset($_GET['table'])) {
    $id = $_GET['file_id'];
    $table = $_GET['table'];

    // Validate the table name
    if (!in_array($table, ['upload_files', 'upload_files1'])) {
        die("Invalid table specified.");
    }

    // Fetch file to download from database
    $sql = "SELECT * FROM $table WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            $file = mysqli_fetch_assoc($result);
            $filepath = 'uploads/' . $file['NAME'];

            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filepath));
                readfile($filepath);

                // Now update downloads count
                $newCount = $file['DOWNLOAD'] + 1;
                $updateQuery = "UPDATE $table SET DOWNLOAD = ? WHERE ID = ?";
                $updateStmt = mysqli_prepare($conn, $updateQuery);
                if ($updateStmt) {
                    mysqli_stmt_bind_param($updateStmt, "is", $newCount, $id);
                    mysqli_stmt_execute($updateStmt);
                } else {
                    log_message("Failed to prepare the update statement: " . $conn->error);
                }

                exit;
            } else {
                echo "File not found.";
                log_message("File not found: " . $filepath);
                exit;
            }
        } else {
            echo "File not found in database.";
            log_message("File not found in database for ID: " . $id);
            exit;
        }
    } else {
        echo "Failed to prepare the statement: " . $conn->error;
        log_message("Failed to prepare the statement: " . $conn->error);
        exit;
    }
} else {
    echo "No file ID or table specified.";
    log_message("No file ID or table specified.");
    exit;
}
?>
