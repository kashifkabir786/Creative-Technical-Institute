<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php

   if( isset( $_GET[ 'roll' ] ) ) {
    $roll = $_GET[ 'roll' ];

    $query_Recordset2 = "SELECT * FROM student WHERE roll = '$roll'";
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
    <title>Creative Technical Institute - Certificate Details</title>
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
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
            style="background-image:url(img/bg/banner-5.jpg);">
            <div class="container">
                <h2>Certificate Details</h2>
                <p>
                    This certificate acknowledges the hard work, dedication, and commitment demonstrated throughout the
                    program.
                </p>
            </div>

        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Certificate
                            Details</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="certificate-details-area pt-50 pb-50 py-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="certificate-details-box bg-white rounded-4 shadow-lg p-5">
                        <div class="row g-4">
                            <!-- Student Image Section -->
                            <div class="col-lg-4 col-md-5">
                                <div class="student-image-box position-relative">
                                    <div class="image-frame p-3 bg-white shadow-sm rounded-4">
                                        <img src="admin/assets/images/student/<?php echo $row_Recordset2['image_1']; ?>"
                                            alt="Student" class="img-fluid rounded-3">
                                    </div>
                                    <div
                                        class="student-badge position-absolute top-0 end-0 bg-primary text-white rounded-circle p-2 mt-2 me-2">
                                        <i class="fas fa-user-graduate fa-2x"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Student Details Section -->
                            <div class="col-lg-8 col-md-7">
                                <div class="certificate-content">
                                    <div class="section-title mb-4">
                                        <h3 class="position-relative pb-3 mb-0">Certificate Details
                                            <span class="title-line"></span>
                                        </h3>
                                    </div>

                                    <div class="details-grid">
                                        <div class="detail-item">
                                            <span class="detail-label">Name</span>
                                            <span class="detail-value"><?php echo $row_Recordset2['fullname']; ?></span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Father's Name</span>
                                            <span
                                                class="detail-value"><?php echo $row_Recordset2['father_name']; ?></span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Registration Number</span>
                                            <span class="detail-value"><?php echo $row_Recordset2['roll']; ?></span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Trade</span>
                                            <span class="detail-value"><?php echo $row_Recordset2['trade']; ?></span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Session</span>
                                            <span class="detail-value"><?php echo $row_Recordset2['session']; ?></span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Grade</span>
                                            <span
                                                class="detail-value grade-badge"><?php echo $row_Recordset2['grade']; ?></span>
                                        </div>
                                    </div>

                                    <div class="certificate-actions mt-4 pt-4 border-top">
                                        <a href="admin/assets/images/student/<?php echo $row_Recordset2['image_2']; ?>"
                                            target="_blank" class="btn btn-primary btn-lg px-5 rounded-pill">
                                            <i class="fas fa-certificate me-2"></i>
                                            View Certificate
                                        </a>
                                        <a href="#" class="btn btn-outline-primary btn-lg px-5 rounded-pill ms-3">
                                            <i class="fas fa-download me-2"></i>
                                            Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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