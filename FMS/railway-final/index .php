<!DOCTYPE html>
<html lang="en">
<?php
define('IMAGE_PATH', 'http://localhost/phplogin/');
?>



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
.transparent-image {
    opacity: 0.2; 
    position: fixed; 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover; 
    z-index: -1; 
}

    .carousel-item img {
        max-width: 100%;
        max-height: 450px; 
        display: block;
        margin: auto; 
    }
    
.scroll-box-container {
    width: 100%; 
    margin: 20px; 
}

.scroll-box {
    height: 300px;
    overflow: hidden; 
    background-color: #f9f9f9; 
    border: 1px solid #ccc; 
    position: relative; 
}

.scroll-box thead th {
    position: sticky;
    top: 0;
    background-color: #f2f2f2;
    z-index: 1;
}

.scroll-box h5 {
    background-color: #007bff; 
    color: #fff; 
    padding: 10px; 
    margin: 0; 
}

.scroll-box .content {
    position: absolute; 
    width: 100%; 
    animation: scroll-up 30s linear infinite; 
}

@keyframes scroll-up {
    0% {
        top: 100%; 
    }
    100% {
        top: -200%; 
    }
}

.scroll-box:hover .content {
    animation-play-state: paused; 
}



        #home {
            display: inline-block;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 10px 20px; /* Some padding */
            text-align: center; /* Centered text */
            text-decoration: none; /* Remove underline */
            border-radius: 4px; /* Rounded corners */
            border: none; /* No border */
            cursor: pointer; /* Pointer/hand icon */
        }
        
        #home:hover {
            background-color: #45a049; /* Darker green on hover */
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
                    <img src="../logo cropped.png" alt="Login Image" class="img-fluid custom-bg-image">
                </div>
                <div class="sidebar-brand-text mx-3">Railway</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item dropdown active">
                <a class="nav-link " href="index .php" id="railwayDashboardDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Railway Dashboard</span>
                </a>
               
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Departments
            </div>

            <!-- Nav Item - Accounts Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="indexWithoutbutton .php" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>All Files</span>
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
                <a class="nav-link" href="tables.php">
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

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

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
                    </ul>
                    <button id="home" onclick="window.location.href='../index2.php'">
                    Homepage
                    </button>
                </nav>
            <marquee>Welcome to East Coast Railway: Rail Sadan, East Coast Railway,  Chandrasekharpur, Bhubaneswar-751017</marquee>

                <!-- End of Topbar -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide1.png.'; ?>" alt="First slide">
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide2.jpg'; ?>" alt="Second slide">
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide3.jpeg'; ?>" alt="Third slide">
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
require_once('connection.php'); // Include your database connection file

// Fetch files from upload_files table in descending order by upload_date
$sql1 = "SELECT id, name, upload_date FROM upload_files ORDER BY upload_date DESC";
$result1 = $conn->query($sql1);

// Fetch files from upload_files1 table in descending order by upload_date
$sql2 = "SELECT id, name, upload_date FROM upload_files1 ORDER BY upload_date DESC";
$result2 = $conn->query($sql2);

// Initialize arrays for files
$files1 = [];
$files2 = [];

// Check if there are any files in upload_files table
if ($result1->num_rows > 0) {
    $files1 = $result1->fetch_all(MYSQLI_ASSOC); // Fetch all rows as associative array
}

// Check if there are any files in upload_files1 table
if ($result2->num_rows > 0) {
    $files2 = $result2->fetch_all(MYSQLI_ASSOC); // Fetch all rows as associative array
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .scroll-box-container {
            max-height: 400px;
            overflow-y: auto;
        }
        .table-wrapper {
            display: block;
            max-height: 400px;
            overflow-y: auto;
        }
        .table-wrapper table {
            width: 100%;
            table-layout: fixed;
        }
        .table-wrapper th, .table-wrapper td {
            white-space: nowrap;
        }
        .table-wrapper th:nth-child(1), .table-wrapper td:nth-child(1) {
            width: 50px; /* Serial No column */
        }
        .table-wrapper th:nth-child(2), .table-wrapper td:nth-child(2) {
            width: 150px; /* Upload Date column */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Notices Section -->
            <div class="col-md-6">
                <div class="scroll-box-container" id="notices-table">
                    <div class="scroll-box">
                        <h5 class="text-center">NOTICES</h5>
                        <?php if (!empty($files1)): ?>
                            <div class="table-wrapper">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $serialNumber = 1; ?>
                                        <?php foreach ($files1 as $file): ?>
                                            <tr>
                                                <td><?php echo $serialNumber++; ?></td>
                                                <td><?php echo date('F j, Y', strtotime($file['upload_date'])); ?></td>
                                                <td>
                                                    <a href="download.php?filename=<?php echo urlencode($file['name']); ?>" target="_blank">
                                                        <?php echo $file['name']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p>No files uploaded yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Policy Section -->
            <div class="col-md-6">
                <div class="scroll-box-container" id="policy-table">
                    <div class="scroll-box">
                        <h5 class="text-center">POLICY</h5>
                        <?php if (!empty($files2)): ?>
                            <div class="table-wrapper">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $serialNumber = 1; ?>
                                        <?php foreach ($files2 as $file): ?>
                                            <tr>
                                                <td><?php echo $serialNumber++; ?></td>
                                                <td><?php echo date('F j, Y', strtotime($file['upload_date'])); ?></td>
                                                <td>
                                                    <a href="download.php?filename=<?php echo urlencode($file['name']); ?>" target="_blank">
                                                        <?php echo $file['name']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p>No files uploaded yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function autoScroll(containerId) {
            const container = document.getElementById(containerId);
            const scrollSpeed = 1; // Adjust the scroll speed
            let scrollPosition = container.scrollHeight; // Start at the bottom

            function scroll() {
                container.scrollTop = scrollPosition; // Set the scroll position
                scrollPosition -= scrollSpeed; // Move the scroll position up
                if (scrollPosition <= 0) {
                    scrollPosition = container.scrollHeight; // Reset scroll position to the bottom
                }
            }

            let intervalId = setInterval(scroll, 30); // Adjust the interval to control the smoothness of the scroll

            function stopScrolling() {
                clearInterval(intervalId); // Stop scrolling
            }

            container.addEventListener('mouseenter', stopScrolling); // Stop scrolling when mouse enters
            container.addEventListener('mouseleave', function() {
                intervalId = setInterval(scroll, 30); // Start scrolling when mouse leaves
            });

            // Initially start scrolling
            scroll();
        }

        document.addEventListener("DOMContentLoaded", function() {
            autoScroll("notices-table");
            autoScroll("policy-table");
        });
    </script>
</body>
</html>





        <!-- End of Content Wrapper -->
        <img src="../logo cropped.png" class="transparent-image >
        <!-- begin page content -->
       
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

    <script>
    document.querySelector('.scroll-box').addEventListener('mouseover', function() {
        this.querySelector('.content').style.animationPlayState = 'paused';
    });

    document.querySelector('.scroll-box').addEventListener('mouseout', function() {
        this.querySelector('.content').style.animationPlayState = 'running';
    });
</script>


</body>

</html>