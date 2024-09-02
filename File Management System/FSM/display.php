<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploaded Files</title>
</head>
<body>
    <h1>Uploaded Files</h1>
    <ul>
        <?php
        $dir = 'upload/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') {
                        echo '<li><a href="' . $dir . $file . '">' . $file . '</a></li>';
                    }
                }
                closedir($dh);
            }
        }
        ?>
    </ul>
</body>
</html>
