<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php
      $query_Recordset2 = "SELECT * FROM `testimonial`";
      $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
      $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Technical Institute - About Us</title>
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
            style="background-image:url(img/bg/banner.jpg);">
            <div class="container">
                <h2>About Us</h2>
                <p>Welcome to Creative Technical Institute, a leading institution dedicated to fostering innovation,
                    creativity, and technical expertise. </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="choose-area bg-img pt-90" style="background-image:url(img/bg/bg-8.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>About <span>Us</span></h2>
                            <p>
                                At Creative Technical Institute, we believe in empowering
                                youth through industry-relevant, hands-on technical education.
                                Established with a vision to bridge the skill gap in the
                                technical field, we specialize in job-oriented courses like AC
                                Repairing, HVAC Systems, Pipe Fitting, and Electrical
                                Training.
                            </p>
                        </div>
                        <p>
                            With modern labs, experienced faculty, and a focus on practical
                            learning, we prepare our students to meet real-world industry
                            demands. Our mission is to provide quality education, affordable
                            training, and career guidance — ensuring every student is
                            skilled, confident, and job-ready. Whether you're starting your
                            career or upgrading your skills, Creative Technical Institute is
                            your trusted path to a brighter future.
                        </p>
                        <div class="about-btn mt-45 mb-4">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="img/banner/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mission-vision-area pt-130 pb-100 bg-light">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Mission & Vision</span></h2>
                <p>We are committed to empowering students through quality education <br>and practical skills to thrive
                    in
                    the technical world.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-box shadow-lg p-4 h-100 bg-white rounded-3">
                        <h4 class="text-success mb-3"><i class="fa fa-bullseye me-2"></i>Our Mission</h4>
                        <p>
                            At Creative Technical Institute, our mission is to deliver high-quality, affordable
                            technical education and training to all learners. We believe in fostering a learning
                            environment that promotes creativity, innovation, and practical skills that align with the
                            needs of modern industries. We are dedicated to bridging the skills gap in the workforce by
                            equipping our students with the knowledge and expertise required to excel in their chosen
                            fields. Our courses, ranging from Web Development to Data Science, are designed to meet
                            industry standards and prepare our learners for both employment and self-employment
                            opportunities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-box shadow-lg p-4 h-100 bg-white rounded-3">
                        <h4 class="text-primary mb-3"><i class="fa fa-eye me-2"></i>Our Vision</h4>
                        <p>
                            At Creative Technical Institute, our vision is to emerge as a leading technical institute,
                            renowned for our commitment to transforming students into competent professionals and
                            responsible citizens. We envision a future where our graduates not only excel in their
                            careers but also play a pivotal role in nation-building through innovation and skill
                            development. We believe in cultivating a culture of creativity and forward-thinking, where
                            students are encouraged to explore new ideas and develop solutions that meet the challenges
                            of today’s dynamic world. Our focus on practical training and real-world applications
                            empowers our learners to become problem-solvers and innovators in their respective fields.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="achievement-area pt-100 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>What <span>People Say</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <?php if($totalRows_Recordset2 > 0) { 
                        do { ?>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="admin/assets/images/testimonial/<?php echo $row_Recordset2['image']; ?>" />
                        </div>
                        <div class="row g-0">
                            <div class="ms-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image: url(img/bg/testi.webp)">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>
                                        <?php echo $row_Recordset2['description']; ?>
                                    </p>
                                    <div class="testi-info">
                                        <h5><?php echo $row_Recordset2['name']; ?></h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="img/icon/testi-icon.webp" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }while($row_Recordset2=mysqli_fetch_assoc($Recordset2)); }?>
                </div>
                <div class="testimonial-image-slider">
                    <?php
                    mysqli_data_seek($Recordset2, 0); 

                    while($row_image = mysqli_fetch_assoc($Recordset2)) {
                    ?>
                    <div class="sin-testi-image">
                        <img src="admin/assets/images/testimonial/<?php echo $row_image['image']; ?>"
                            alt="<?php echo $row_image['name']; ?>" />
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="img/icon-img/testi-text.png">
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