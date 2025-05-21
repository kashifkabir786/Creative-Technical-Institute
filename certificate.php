<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php
$error = "";
$editFormAction = $_SERVER[ 'PHP_SELF' ];
if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
    $editFormAction .= "?" . htmlentities( $_SERVER[ 'QUERY_STRING' ] );
}

if ( isset( $_POST[ 'MM_roll' ] ) && $_POST[ 'MM_roll' ] == 'form1' ) {
    $roll = $_POST[ 'roll' ];

    $query_Recordset = "SELECT roll FROM student WHERE roll = '$roll'";
    $Recordset = mysqli_query( $creative_technical_institute, $query_Recordset )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset = mysqli_fetch_assoc( $Recordset );
    $totalRows_Recordset = mysqli_num_rows( $Recordset );

    if ( $totalRows_Recordset > 0 ) {
        header( 'Location:certificate-detail.php?roll=' . $row_Recordset[ 'roll' ] );
    } else {
        $error = "Please enter valid registration number.";
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Technical Institute - Certificate</title>
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
                <h2>Certificate</h2>
                <p>
                    This certificate acknowledges the hard work, dedication, and commitment demonstrated throughout the
                    program.
                </p>
            </div>

        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Certificate</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="certificate-verify-area pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="certificate-verify-box bg-white rounded-4 shadow-lg p-5">
                        <div class="text-center mb-5">
                            <div class="certificate-icon mb-4">
                                <i class="fas fa-certificate fa-3x text-primary"></i>
                            </div>
                            <h2 class="section-title position-relative pb-3 mb-3">
                                Verify Your Certificate
                                <span class="position-absolute start-50 bottom-0 translate-middle-x"
                                    style="width: 50px; height: 2px; background: #002147;"></span>
                            </h2>
                            <p class="text-muted">Enter your registration number to verify the authenticity of your
                                certificate</p>
                        </div>
                        <p class="text-danger"><?php echo $error; ?></p>
                        <form action="<?php echo $editFormAction ?>" name="form1" role="form" method="post">
                            <div class="form-group mb-4">
                                <label class="form-label fw-bold mb-3">Registration Number</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white border-0">
                                        <i class="fas fa-id-card"></i>
                                    </span>
                                    <input type="text" name="roll"
                                        class="form-control form-control-lg border-0 shadow-none"
                                        placeholder="Enter your registration number" style="background: #f8f9fa;"
                                        required>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill">
                                    <i class="fas fa-search me-2"></i> Verify Certificate
                                </button>
                            </div>
                            <input type="hidden" name="MM_roll" value="form1">
                        </form>
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