<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php
      $query_Recordset2 = "SELECT * FROM banner_image";
      $Recordset2 = mysqli_query( $creative_technical_institute, $query_Recordset2 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
      $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );

      $query_Recordset3 = "SELECT * FROM `course`";
      $Recordset3 = mysqli_query( $creative_technical_institute, $query_Recordset3 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset3 = mysqli_fetch_assoc( $Recordset3 );
      $totalRows_Recordset3 = mysqli_num_rows( $Recordset3 );

      $query_Recordset4 = "SELECT * FROM `notice`";
      $Recordset4 = mysqli_query( $creative_technical_institute, $query_Recordset4 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset4 = mysqli_fetch_assoc( $Recordset4 );
      $totalRows_Recordset4 = mysqli_num_rows( $Recordset4 );

      $query_Recordset5 = "SELECT * FROM `testimonial`";
      $Recordset5 = mysqli_query( $creative_technical_institute, $query_Recordset5 )or die( mysqli_error( $creative_technical_institute ) );
      $row_Recordset5 = mysqli_fetch_assoc( $Recordset5 );
      $totalRows_Recordset5 = mysqli_num_rows( $Recordset5 );

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Creative Technical Institute - Home</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/icons.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Font Awesome CDN (Simple version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Modernizer JS -->
    <script src="js/modernizr-3.11.7.min.js"></script>
</head>

<body>
    <?php require_once('header.php'); ?>
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <?php if($totalRows_Recordset2 > 0){
            do{ ?>
            <div class="single-slider slider-height-1 bg-img"
                style="background-image: url(admin/assets/images/banner/<?php echo $row_Recordset2['banner_image']; ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-130">
                                <h1 class="animated">Shape Your Future with Skilled Hands</h1>
                                <p class="animated">
                                    Join industry-focused training in AC, HVAC, Electrical, and Pipe Fitting. Gain
                                    hands-on experience,
                                    government certifications, and job placement support for a better tomorrow.
                                </p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="slider-single-img slider-animated-1">
                        <img class="animated" src="img/slider/single-slide-1.webp" alt="" />
                    </div> -->
                </div>
            </div>
            <?php }while($row_Recordset2=mysqli_fetch_assoc($Recordset2)); } ?>
        </div>
    </div>
    <div class="container-fluid marquee p-2" align="center">
        <marquee width="100%">
            <b><?php echo $row_Recordset4['notice']; ?></b>
        </marquee>
    </div>
    <div class="choose-us section-padding-1" style="margin-top: 150px">
        <div class="container-fluid">
            <div class="row no-gutters choose-negative-mrg">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-light-blue">
                        <div class="choose-img">
                            <img class="animated" src="img/icon/service-1.webp" alt="" />
                        </div>
                        <div class="choose-content">
                            <h3>Certified Technical Courses</h3>
                            <p>
                                Enroll in government-approved AC, HVAC & Pipe Fitting courses
                                and become job-ready with practical training.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-yellow">
                        <div class="choose-img">
                            <img class="animated" src="img/icon/service-2.webp" alt="" />
                        </div>
                        <div class="choose-content">
                            <h3>100% Practical Training</h3>
                            <p>
                                Hands-on workshops and lab-based sessions to master real
                                tools, techniques, and technical skills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-blue">
                        <div class="choose-img">
                            <img class="animated" src="img/icon/service-3.webp" alt="" />
                        </div>
                        <div class="choose-content">
                            <h3>Placement & Career Assistance</h3>
                            <p>
                                We guide you toward job opportunities with reputed companies
                                and provide career support after course completion.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-green">
                        <div class="choose-img">
                            <img class="animated" src="img/icon/service-4.webp" alt="" />
                        </div>
                        <div class="choose-content">
                            <h3>Expert Trainers & Mentors</h3>
                            <p>
                                Learn from industry professionals with real-world experience
                                in technical fields like HVAC and Refrigeration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us pt-130 pb-30">
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
                <div class="col-lg-6 col-md-6 default-overlay">
                    <div class="about-img">
                        <img src="img/banner/about.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-area bg-img pt-80 pb-10" style="background-image: url(img/bg/bg-1.webp)">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Our</span> Courses</h2>
                <p>
                    At Creative Technical Institute, we offer skill-based courses<br />
                    designed to prepare you for real-world careers.
                </p>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                <?php if ($totalRows_Recordset3 > 0){
                do { ?>
                <div class="single-course">
                    <div class="course-img">
                        <a href="course.php"><img class="animated"
                                src="admin/assets/images/course/<?php echo $row_Recordset3['image']; ?>" alt="" /></a>
                        <span>Addmission Going On</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="course.php"><?php echo $row_Recordset3['course_name']; ?></a></h4>
                        <p>
                            <?php
                            $description = $row_Recordset3['course_description'];
                            echo substr($description, 0, 50) . (strlen($description) > 50 ? '...' : '');
                            ?>
                        </p>

                    </div>
                    <!-- <div class="course-position-content">
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
                    </div> -->
                </div>
                <?php }while($row_Recordset3=mysqli_fetch_assoc($Recordset3)); }?>
            </div>
        </div>
    </div>
    <section class="why-choose-us section-padding pt-130 pb-100" style="background: #f9f9f9">
        <div class="container">
            <div class="section-title mb-60">
                <h2>Why <span>Choose Us</span></h2>
                <p>
                    Discover the key reasons why thousands of students trust Creative
                    Technical Institute for their career journey.
                </p>
            </div>
            <div class="row">
                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex">
                    <div
                        class="choose-box text-center p-4 bg-white shadow-sm rounded w-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3" style="font-size: 40px; color: #007bff">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4>Skill-Based Training</h4>
                            <p>
                                Get hands-on practical training in AC, HVAC, Pipe Fitting &
                                more, led by expert instructors.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex">
                    <div
                        class="choose-box text-center p-4 bg-white shadow-sm rounded w-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3" style="font-size: 40px; color: #ffc107">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h4>Government-Certified Courses</h4>
                            <p>
                                All our courses are certified and recognized, helping you gain
                                credible skills for the real world.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex">
                    <div
                        class="choose-box text-center p-4 bg-white shadow-sm rounded w-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3" style="font-size: 40px; color: #28a745">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h4>Placement Assistance</h4>
                            <p>
                                We connect you with job opportunities in reputed companies
                                after course completion.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex">
                    <div
                        class="choose-box text-center p-4 bg-white shadow-sm rounded w-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3" style="font-size: 40px; color: #17a2b8">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h4>Modern Lab Facility</h4>
                            <p>
                                State-of-the-art workshops and equipment for real-time
                                practical learning and experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Achievement</span></h2>
                <p>
                    Proudly shaping careers with over
                    <strong>1000+ successful students</strong> trained in AC, HVAC, and
                    Pipe Fitting. <br />
                    Our certified courses, expert faculty, and placement support make us
                    a trusted name in technical education.
                </p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one">
                        <div class="count-img">
                            <img src="img/icon/achieve-1.webp" alt="" />
                        </div>
                        <div class="count-content">
                            <h2 class="count">890</h2>
                            <span>COURSES</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two">
                        <div class="count-img">
                            <img src="img/icon/achieve-2.webp" alt="" />
                        </div>
                        <div class="count-content">
                            <h2 class="count">670</h2>
                            <span>STUDENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three">
                        <div class="count-img">
                            <img src="img/icon/achieve-3.webp" alt="" />
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>CERTIFIED STUDENTS</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four">
                        <div class="count-img">
                            <img src="img/icon/achieve-4.webp" alt="" />
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>FACULTIES</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <?php if($totalRows_Recordset5 > 0) { 
                        do { ?>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="admin/assets/images/testimonial/<?php echo $row_Recordset5['image']; ?>" />
                        </div>
                        <div class="row g-0">
                            <div class="ms-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image: url(img/bg/testi.webp)">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>
                                        <?php echo $row_Recordset5['description']; ?>
                                    </p>
                                    <div class="testi-info">
                                        <h5><?php echo $row_Recordset5['name']; ?></h5>
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
                    <?php }while($row_Recordset5=mysqli_fetch_assoc($Recordset5)); }?>
                </div>
                <div class="testimonial-image-slider">
                    <?php
                    mysqli_data_seek($Recordset5, 0); 

                    while($row_image = mysqli_fetch_assoc($Recordset5)) {
                    ?>
                    <div class="sin-testi-image">
                        <img src="admin/assets/images/testimonial/<?php echo $row_image['image']; ?>"
                            alt="<?php echo $row_image['name']; ?>" />
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="img/icon/testi-text.webp" />
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