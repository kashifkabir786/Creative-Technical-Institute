<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php require_once('session.php'); ?>
<?php
$flag = false;
if ( isset( $_GET[ 'banner_id' ] ) ) {
    $banner_id = $_GET[ 'banner_id' ];

    $query_Recordset2 = "SELECT * FROM banner_image WHERE banner_id = '$banner_id'";
    $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
    $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );
    $flag = true;
}
    
if ( isset( $_GET[ 'success' ] ) && $_GET[ 'success' ] == "Added" ) {
    $query_Recordset2 = "SELECT * FROM banner_image ORDER BY banner_id DESC LIMIT 1";
    $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
    $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );
    $banner_id = $row_Recordset2[ 'banner_id' ];
    $flag = true;
}

$editFormAction = $_SERVER[ 'PHP_SELF' ];
if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
    $editFormAction .= "?" . htmlentities( $_SERVER[ 'QUERY_STRING' ] );
}

if ( ( isset( $_POST[ "MM_insert" ] ) ) && ( $_POST[ "MM_insert" ] == "form1" ) ) {

    $target = "assets/images/banner/";
    $randno = rand( 100, 1000 );
    $target = $target . $randno . "-" . basename( $_FILES[ 'banner_image' ][ 'name' ] );
    $imageFileType = pathinfo( $target, PATHINFO_EXTENSION );
    // Allow certain file formats
    if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif" ) {
        $error[] = "Sorry, File is not an image. Please upload jpg, png or gif files only";
    } else if ( strpos( strtolower( $_FILES[ 'banner_image' ][ 'name' ] ), 'php' ) !== false || strpos( strtolower( $_FILES[ 'banner_image' ][ 'name' ] ), 'js' ) !== false ) {
        $error[] = "Sorry, File is not an image. Please upload jpg, png or gif files only";
    } else
        $pic = $randno . "-" . ( $_FILES[ 'banner_image' ][ 'name' ] );
    if ( move_uploaded_file( $_FILES[ 'banner_image' ][ 'tmp_name' ], $target ) ) {

        $insertSQL = sprintf( "INSERT INTO `banner_image`(`banner_image`) VALUES (%s)",
            GetSQLValueString( $pic, "text" ) );
        $Result = mysqli_query( $creative_technical_institute, $insertSQL )or die( mysqli_error( $creative_technical_institute ) );

        $insertGoTo = "banner_image.php?success=Added";
        if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
            $insertGoTo .= ( strpos( $insertGoTo, '?' ) ) ? "&" : "?";
            $insertGoTo .= $_SERVER[ 'QUERY_STRING' ];
        }
        header( sprintf( "Location: %s", $insertGoTo ) );
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Banner Image | Creative Technical Institute</title>
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
                                    class="mdi mdi-office"></i> </span> Add Banner Image </h3>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-1"> <a href="banner_image.php">
                                                <button type="button"
                                                    class="btn btn-gradient-primary btn-rounded btn-fw"><i
                                                        class="mdi mdi-arrow-left menu-icon"></i> &nbsp;Back</button>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
        if ( isset( $_GET[ 'success' ] ) ) {
            echo '<div class="col-md-12">';
            echo '<div class="alert alert-success">Banner Image ' . $_GET[ 'success' ] . ' Successfully</div>';
            echo '</div>';
        }
        ?>

                    <?php
      if ( isset( $_GET[ 'success' ] ) || $flag ) {
        ?>

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Banner Image</h4>
                                        <div class="col-md-6"> <img
                                                src="assets/images/banner/<?php echo $row_Recordset2['banner_image'] ?>"
                                                width="60%" class="img-thumbnail"> </div>
                                        <div class="col-md-3">
                                            <form action="<?php echo $editFormAction; ?>" method="POST"
                                                enctype="multipart/form-data" name="form2" role="form">
                                                <div class="form-group mt-3">
                                                    <label class="control-label" for="icon">Select Image</label>
                                                    <input type="file" name="banner_image" id="banner_image" />
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" id="upload"
                                                        class="btn btn-gradient-primary btn-fw">Upload</button>
                                                    <input type="hidden" name="banner_id"
                                                        value="<?php echo $row_Recordset2['banner_id'] ?>" />
                                                    <input type="hidden" name="MM_photo" value="form2">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" enctype="multipart/form-data" name="form1" role="form"
                                        action="<?php echo $editFormAction;?>">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if(!$flag) { ?>
                                                <div class="form-group">
                                                    <label>Banner Image<span class="text-danger">*</span></label>
                                                    <input type="file" name="banner_image" class="form-control"
                                                        placeholder="Icon"
                                                        value="<?php if($flag) echo $row_Recordset2['banner_image'] ?>"
                                                        required>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mt-4">Save</button>

                                        <?php
                                        if ( $flag ) {
                                            ?>
                                        <input type="hidden" name="MM_update" value="form1">
                                        <input type="hidden" name="banner_id" value="<?php echo $banner_id; ?>">
                                        <?php } else { ?>
                                        <input type="hidden" name="MM_insert" value="form1">
                                        <?php } ?>
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