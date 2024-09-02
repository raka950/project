<?php 
include("connection.php");
include("login.php");
$imagePath = "logo cropped.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECoR - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/railway2.css" rel="stylesheet">

    <!-- CSS for login page image -->
    <style>
        @media (min-width: 992px) {
            .custom-bg-image {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
            }
        }
        @media (max-width: 991.98px) {
            .custom-bg-image {
                display: none;
            }
        }
        .bg-login-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <<img src="<?php echo $imagePath; ?>" alt="Login Image" class="img-fluid custom-bg-image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome !</h1>
                                    </div>
                                    <form class="user" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return isvalid()" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="user" name="user" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" name="submit">
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="./index2.php">Main Page</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <!-- Validation script -->
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty!!!");
                return false;
            }
            else if(user.length==""){
                alert("Username field is empty!!!");
                return false;
            }
            else if(pass.length==""){
                alert("Password field is empty!!!");
                return false;
            }
        }
    </script>
</body>
</html>
