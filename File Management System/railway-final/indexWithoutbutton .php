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
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="../SignUP-SignIn-FIrebase-main/railwayimg.jpg">
                <div class="sidebar-brand-icon ">
                    <img src="./logo cropped.png" alt="Login Image" class="img-fluid custom-bg-image">
                </div>
                <div class="sidebar-brand-text mx-3">Railway</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item dropdown active">
                <a class="nav-link " href="index .php" id="railwayDashboardDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                        <button id="home" onclick="window.location.href='../index2.php'">
                    Homepage
                    </button>

                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="grid-container" id="main-grid">
                    <a href="year.php" class="grid-item" >POLICY</a>
                    <a href="yearnotice.php" class="grid-item" >NOTICE</a>
                    <a href="year.php" class="grid-item" >OFFICE ORDER</a>
                    <a href="year.php" class="grid-item" >GUIDELINE</a>
                    <a href="year.php" class="grid-item" >INFORMATION</a>
                    <a href="year.php" class="grid-item" >SERVICES</a>
                </div>
            
                
            
                <script>
                    function showYearGrid(event) {
                        event.preventDefault();
                        document.getElementById('main-grid').classList.add('hidden');
                        document.getElementById('year-grid').classList.remove('hidden');
                    }
                </script>
                <!-- End of Main Content -->



            </div>
            <!-- End of Content Wrapper -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Railway 24'</span>
                    </div>
                </div>
            </footer>
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
</body>

</html>