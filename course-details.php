<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php
      if ( isset( $_GET[ 'course_id' ] ) ) {
      $course_id = $_GET[ 'course_id' ];

      $query_Recordset2 = "SELECT * FROM `course` WHERE course_id = '$course_id'";
      $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
      $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );
      }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Technical Institute - Courses</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/icons.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome CDN (Simple version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Modernizer JS -->
    <script src="js/modernizr-3.11.7.min.js"></script>
</head>

<body>
    <?php require_once('header.php'); ?>
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
            style="background-image:url(img/bg/banner-2.jpg);">
            <div class="container">
                <h2>Course Details</h2>
                <p>At Creative Technical Institute, we offer a diverse range of courses tailored to equip you with the
                    skills needed to thrive in today's competitive job market. </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Details</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="course-details-area pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="course-left-wrap mr-40">
                        <div class="apply-area">
                            <img src="admin/assets/images/course/<?php echo $row_Recordset2['image']; ?>" alt="">
                        </div>
                        <div class="course-tab-list nav pt-40 pb-25 mb-35">
                            <a class="active" href="#course-details-1" data-bs-toggle="tab">
                                <h4>Over View </h4>
                            </a>
                        </div>
                        <div class="tab-content jump">
                            <div class="tab-pane active" id="course-details-1">
                                <div class="over-view-content">
                                    <h4>COURSE DETAILS</h4>
                                    <h5>Course Name : <?php echo $row_Recordset2['course_name']; ?></h5>
                                    <p><?php echo $row_Recordset2['course_description']; ?></p>
                                    <div class="course-details-img">
                                        <img src="img/banner/course-details-1.jpg" alt="">
                                    </div>
                                    <div class="course-summary-wrap">
                                        <!-- <div class="single-course-summary">
                                            <h4>Total Students</h4>
                                            <span><i class="fa fa-user"></i> 50</span>
                                        </div> -->
                                        <div class="single-course-summary">
                                            <h4>Course Duration</h4>
                                            <span><i class="fa fa-clock-o"></i>
                                                <?php echo $row_Recordset2['duration']; ?></span>
                                        </div>
                                        <!-- <div class="single-course-summary">
                                            <h4>Course Credits</h4>
                                            <span><i class="fa fa-diamond"></i> 125</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Total Semester</h4>
                                            <span><i class="fa fa-book"></i> 12</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="related-course pt-70">
                            <div class="related-title mb-45 mrg-bottom-small">
                                <h3>Related Course</h3>
                                <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut
                                    aliquip. </p>
                            </div>
                            <div class="related-slider-active">
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Apparel Manufacturing</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="img/course/related-course-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Grphic Design & Multimedia</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="img/course/related-course-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="img/course/related-course-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>
    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="js/jquery-v2.2.4.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>