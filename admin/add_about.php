<?php require_once('../Connections/compass_institute.php'); ?>
<?php require_once('session.php'); ?>
<?php

    $query_Recordset2 = "SELECT * FROM about";
    $Recordset2 = mysqli_query( $compass_institute, $query_Recordset2 )or die( mysqli_error( $compass_institute ) );
    $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
    $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );

    $editFormAction = $_SERVER[ 'PHP_SELF' ];
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $editFormAction .= "?" . htmlentities( $_SERVER[ 'QUERY_STRING' ] );
    }

//updating project
if ( ( isset( $_POST[ "MM_update" ] ) ) && ( $_POST[ "MM_update" ] == "form1" ) ) {

    $updateSQL = sprintf( "UPDATE `about` SET `about` = %s",
            GetSQLValueString( $_POST[ 'about' ], "text" ) );
    $Result = mysqli_query( $compass_institute, $updateSQL )or die( mysqli_error( $compass_institute ) );

    $insertGoTo = "add_about.php?success=Updated";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $insertGoTo .= ( strpos( $insertGoTo, '?' ) ) ? "&" : "?";
        $insertGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $insertGoTo ) );
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update About | Compass National Institute</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"> <a
                    class="navbar-brand brand-logo" href="home.php"><img src="assets/images/logo.png" alt="logo"
                        style="width: auto; height: 75px;" /></a> </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span> </button>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas"> <span class="mdi mdi-menu"></span> </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item"> <a class="nav-link" href="home.php"> <span class="menu-title">Home</span>
                            <i class="mdi mdi-home menu-icon"></i> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="add_about.php"> <span
                                class="menu-title">About</span>
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
                                    class="mdi mdi-office"></i> </span> Update About </h3>
                    </div>
                    <?php
        if ( isset( $_GET[ 'success' ] ) ) {
            echo '<div class="col-md-12">';
            echo '<div class="alert alert-success">About ' . $_GET[ 'success' ] . ' Successfully</div>';
            echo '</div>';
        }
        ?>

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" name="form1" role="form" action="<?php echo $editFormAction;?>">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>About</label>
                                                    <textarea name="about" rows="5" class="form-control"
                                                        placeholder=""><?php echo $row_Recordset2['about']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary mt-4">Save</button>
                                        <input type="hidden" name="MM_update" value="form1">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
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
    <script src="assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
</body>

</html>