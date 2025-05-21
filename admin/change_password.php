<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php require_once('session.php'); ?>
<?php
$editFormAction = $_SERVER[ 'PHP_SELF' ];
if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
    $editFormAction .= "?" . htmlentities( $_SERVER[ 'QUERY_STRING' ] );
}
$flag = true;

$errpass1 = $errpass2 = $errpass = $errpass3 = "";

if ( ( isset( $_POST[ "MM_update" ] ) ) && ( $_POST[ "MM_update" ] == "form1" ) ) {

    $query_Recordset2 = "SELECT password FROM admin WHERE uname = '{$row_Recordset1['uname']}'";
    $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );

    $hash = $row_Recordset2[ 'password' ];
    if ( !password_verify( $_POST[ 'old-password' ], $hash ) )
        $errpass3 = "Wrong Password Entered";
    if ( empty( $_POST[ 'password' ] ) )
        $errpass1 = "Please Enter Password";
    if ( empty( $_POST[ 'rpassword' ] ) )
        $errpass2 = "Please Retype Password";
    if ( $_POST[ 'password' ] != $_POST[ 'rpassword' ] )
        $errpass = "Passwords Don't Match";

    if ( empty( $errpass3 ) && empty( $errpass1 ) && empty( $errpass2 ) && empty( $errpass ) ) {
        $password = $_POST[ 'password' ];
        $hash = password_hash( $password, PASSWORD_DEFAULT );

        $updateSQL = sprintf( "UPDATE `admin` SET `password` = '$hash' WHERE `uname` = %s", GetSQLValueString( $_POST[ 'subscriber_id' ], "text" ) );

        $Result1 = mysqli_query( $creative_technical_institute, $updateSQL )or die( mysqli_error( $creative_technical_institute ) );

        unset( $_SESSION[ 'uname' ] );

        $insertGoTo = "index.php?sucess=yes";
        if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
            $insertGoTo .= ( strpos( $insertGoTo, '?' ) ) ? "&" : "?";
            $insertGoTo .= $_SERVER[ 'QUERY_STRING' ];
        }
        header( sprintf( "Location: %s", $insertGoTo ) );
    }

}
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Change Password | Creative Technical Institute</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo d-flex align-items-center" href="home.php"
                    style="text-decoration: none;">
                    <img src="assets/images/logo.jpg" alt="logo" style="width: auto; height: 75px;" />
                    <div class="ms-3 text-start">
                        <h4 class="mb-0" style="font-weight: bold; color: #2c3e50; margin-top:5px; margin-left:-20px;">
                            Creative
                            Technical<br>
                            Institute
                        </h4>
                    </div>
                </a>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item"> <a class="nav-link" href="home.php"> <span class="menu-title">Home</span>
                            <i class="mdi mdi-home menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="student.php"> <span
                                class="menu-title">Student</span>
                            <i class="mdi mdi-account-tie menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="course.php"> <span class="menu-title">Course
                            </span>
                            <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="testimonial.php"> <span
                                class="menu-title">Testimonial
                            </span>
                            <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="banner_image.php"> <span class="menu-title">Banner
                                Image</span>
                            <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="gallery.php"> <span class="menu-title">Gallery
                            </span> <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="notice.php"> <span class="menu-title">Notice
                            </span> <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="change_password.php"> <span
                                class="menu-title">Change Password
                            </span> <i class="mdi mdi-card menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="logout.php"> <span class="menu-title">Log Out</span>
                            <i class="mdi mdi-logout menu-icon"></i> </a> </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> <span class="page-title-icon bg-gradient-primary text-white me-2"> <i
                                    class="mdi mdi-office"></i> </span> UPDATE PASSWORD </h3>
                    </div>

                    <?php
                            if ( isset( $_GET[ 'success' ] ) ) {
                                echo '<div class="col-md-12">';
                                echo '<div class="alert alert-success">Password ' . $_GET[ 'success' ] . ' Successfully</div>';
                                echo '</div>';
                            }
                            ?>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row margin-70">
                                    <div class="col-md-12">
                                        <form id="form1" name="form1" action="<?php echo $editFormAction; ?>"
                                            method="POST" role="form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Update Password</h4>
                                                    <hr />
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="old-password">Old Password:<span
                                                                class="text-warning">*
                                                                <?php echo $errpass3; ?></span></label>
                                                        <input type="password" class="form-control" name="old-password"
                                                            id="old-password">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="password">New Password:<span class="text-warning">*
                                                                <?php echo $errpass1; ?></span></label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="rpassword">Repeat Password:<span
                                                                class="text-warning">*
                                                                <?php echo $errpass2 . $errpass; ?></span></label>
                                                        <input type="password" class="form-control" name="rpassword"
                                                            id="rpassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" id="save"
                                                    class="btn btn-raised btn-primary">Update</button>
                                                <input type="hidden" name="subscriber_id"
                                                    value="<?php echo $row_Recordset1['uname'] ?>" />
                                                <input type="hidden" name="MM_update" value="form1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between"> <span
                            class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyrights &copy;
                            2025 Creative Technical Institute. All Rights Reserved </span></div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>