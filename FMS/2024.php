<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Railway - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/railway2.css" rel="stylesheet">
    <style>
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            width: 80%;
            max-width: 600px;
            margin-left: 20%;
        }
        .grid-item {
            background-color: #5d55f8;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 30px;
            border-radius: 5px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .grid-item:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../SignUP-SignIn-FIrebase-main/railwayimg.jpg">
                <div class="sidebar-brand-icon ">
                    <img src="logo cropped.png" alt="Login Image" class="img-fluid custom-bg-image">
                </div>
                <div class="sidebar-brand-text mx-3">Railway</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index .php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Railway Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Departments
            </div>

            <!-- Nav Item - Accounts Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="category.php" data-toggle="" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>File Upload</span>
            </a>
        </li>

        <!-- Nav Item - Personnel Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Personnel</span>
            </a>
        </li>

    

        <!-- Nav Item - S & T Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>S & T</span>
            </a>
            
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>RPF</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Commercial</span></a>
        </li>

        <!-- Nav Item- Mechanical collapse menu-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Mechanical</span>
            </a>
        </li>

       <!-- Nav Item- Operating collapse menu-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Operating</span>
            </a>
        </li>

            <!-- Nav Item- Mechanical collapse menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mechanical</span>
                </a>
            </li>

            <!-- Nav Item- Operating collapse menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tables.php" data-toggle="" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Operating</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


            <section class="content">
                <h2 id="categoryTitle"></h2>
                <ul id="subcategoryList"></ul>
            </section>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
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
    <div class="file-upload-container">
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

</body>
</html>


            </div>
            <!-- End of Content Wrapper -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="index.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <!-- SIDE BAR SCRIPT -->
        <script src="./scripts.js"></script>
        <style>    

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 0;
}

.file-upload-container {
    max-width: 900px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.upload-form {
    margin-bottom: 20px;
}

.upload-form label {
    display: block;
    margin-bottom: -45px;
    font-weight: bold;
}

.upload-form input[type="file"],
.upload-form input[type="text"],
.upload-form select {
    width: 100%;
    padding: 7px;
    margin-top: 3px;
    margin-bottom: 50px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px;
    display: block;
}

.upload-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 30px;
}

.upload-form input[type="submit"]:hover {
    background-color: #45a049;
}

.file-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.file-table th,
.file-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.file-table th {
    background-color: #f2f2f2;
}

.file-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.file-table tr:hover {
    background-color: #f1f1f1;
}

.download-link,
.delete-link {
    color: #4CAF50;
    text-decoration: none;
}

.download-link:hover,
.delete-link:hover {
    text-decoration: underline;
}

</style>
</body>

</html>