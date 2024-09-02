<?php
if (isset($_GET['filename'])) {
    $filepath = 'D:/dmp/New folder/htdocs/phplogin/uploads/' . $_GET['filename']; // Adjust the path separator

    if (file_exists($filepath) && is_readable($filepath)) {
        // Set headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        // Output the file
        readfile($filepath);
        exit;
    } else {
        echo "File not found or not readable.";
    }
} else {
    echo "Invalid request.";
}
?>
