<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php

      $query_Recordset2 = "SELECT * FROM `gallery`";
      $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
      $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Technical Institute - Gallery</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once('header.php'); ?>

    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
            style="background-image:url(img/bg/banner-4.jpg);">
            <div class="container">
                <h2>Gallery</h2>
                <p>
                    Welcome to our Gallery! Here, you can explore some of the vibrant moments and achievements from our
                    students throughout their journey at the institute.
                </p>
            </div>

        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gallery-area pt-80 pb-80">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Gallery</span></h2>
                <p>Explore our student activities, training sessions, and achievements through these captured moments.
                </p>
            </div>
            <div class="row g-4">
                <!-- Gallery Item -->
                <?php if($totalRows_Recordset2 > 0) {
                    do { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <a href="admin/assets/images/gallery/<?php echo $row_Recordset2['image']; ?>"
                            data-lightbox="gallery" data-title="Gallery Image">
                            <img src="admin/assets/images/gallery/<?php echo $row_Recordset2['image']; ?>"
                                alt="Gallery Image">
                            <div class="gallery-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }while($row_Recordset2=mysqli_fetch_assoc($Recordset2)); }?>
                <!-- Add more gallery items as needed -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': 'Image %1 of %2'
    });
    </script>
</body>

</html>