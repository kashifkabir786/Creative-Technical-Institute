<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php require_once('session.php'); ?>
<?php
 $query_Recordset2 = "SELECT (SELECT COUNT(student_id) FROM student) AS total_student, (SELECT COUNT(course_id) FROM course) AS total_course";
 $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
 $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
 $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );

 $query_Recordset3 = "SELECT * FROM `student` ORDER BY student_id DESC LIMIT 10";
 $Recordset3 = mysqli_query( $creative_technical_institute, $query_Recordset3 )or die( mysqli_error( $creative_technical_institute ) );
 $row_Recordset3 = mysqli_fetch_assoc( $Recordset3 );
 $totalRows_Recordset3 = mysqli_num_rows( $Recordset3 );

 $query_Recordset4 = "SELECT * FROM `course` ORDER BY course_id DESC LIMIT 10";
 $Recordset4 = mysqli_query( $creative_technical_institute, $query_Recordset4 )or die( mysqli_error( $creative_technical_institute ) );
 $row_Recordset4 = mysqli_fetch_assoc( $Recordset4 );
 $totalRows_Recordset4 = mysqli_num_rows( $Recordset4 );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Compass National Institue</title>
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
                                    class="mdi mdi-home"></i> </span> Dashboard </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page"> <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-6 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body"> <img src="assets/images/dashboard/circle.svg"
                                        class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">No of Student</h4>
                                    <h1 class="mb-5"><?php echo $row_Recordset2['total_student'] ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body"> <img src="assets/images/dashboard/circle.svg"
                                        class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">No of Course</h4>
                                    <h1 class="mb-5"><?php echo $row_Recordset2['total_course'] ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--		  customers-->
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Student</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Full Name </th>
                                                    <th> Roll </th>
                                                    <th> Trade </th>
                                                    <th> Image </th>
                                                    <th> Session </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                      if ( $totalRows_Recordset3 > 0 ) {
                          do {
                              ?>
                                                <tr>
                                                    <td><?php echo $row_Recordset3['fullname'] ?></td>
                                                    <td><?php echo $row_Recordset3['roll'] ?></td>
                                                    <td><?php echo $row_Recordset3['trade'] ?></td>
                                                    <td><a href="assets/images/student/<?php echo $row_Recordset3['image_1'] ?>"
                                                            target="_blank"><img
                                                                src="assets/images/student/<?php echo $row_Recordset3['image_1'] ?>"></a>
                                                    </td>
                                                    <td><?php echo $row_Recordset3['session'] ?></td>
                                                </tr>
                                                <?php }while($row_Recordset3 = mysqli_fetch_assoc($Recordset3));} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--payment-->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Course</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Course Name </th>
                                                    <th> Fees </th>
                                                    <th> duration </th>
                                                    <th> Image </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                      if ( $totalRows_Recordset4 > 0 ) {
                          do {
                              ?>
                                                <tr>
                                                    <td><?php echo $row_Recordset4['course_name'] ?></td>
                                                    <td><?php echo $row_Recordset4['fees'] ?></td>
                                                    <td><?php echo $row_Recordset4['duration'] ?></td>
                                                    <td><a href="assets/images/course/<?php echo $row_Recordset4['image'] ?>"
                                                            target="_blank"><img
                                                                src="assets/images/course/<?php echo $row_Recordset4['image'] ?>"></a>
                                                    </td>
                                                </tr>
                                                <?php }while($row_Recordset4 = mysqli_fetch_assoc($Recordset4));} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between"> <span
                            class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyrights &copy;
                            2025 Creative Technical Institute. All Rights Reserved </span></div>
                </footer>
                <!-- partial -->
            </div>
        </div>
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