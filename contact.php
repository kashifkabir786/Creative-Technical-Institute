<?php require_once('Connections/creative_technical_institute.php'); ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Technical Institute - Contact Us</title>
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
            style="background-image:url(img/bg/banner-3.jpg);">
            <div class="container">
                <h2>Contact Us</h2>
                <p>
                    Have questions or need more information? We’re here to help! Get in touch with us to learn more
                    about our courses, admissions, or any general inquiries. Our dedicated team will get back to you as
                    soon as possible.
                </p>
            </div>

        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-map mr-70">
                        <div id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117711.79652231357!2d86.0933681503112!3d22.784165519903556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e31989f0e2b5%3A0xeeec8e81ce9b344!2sJamshedpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1745411021409!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="contact-title mb-45">
                            <h2>Stay <span>Connected</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et
                                dolore magna aliqua.</p>
                        </div>
                        <form id="contact-form" action="php/mail.php" method="post">
                            <input name="name" placeholder="Name*" type="text">
                            <input name="email" placeholder="Email*" type="email">
                            <input name="subject" placeholder="Subject*" type="text">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-info-area bg-img pt-180 pb-140 default-overlay"
        style="background-image:url(img/bg/contact-info.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <p>Jamshedpur <br>Jharkhand.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <div class="contact-info-phn">
                            <div class="info-phn-title">
                                <span>Phone : </span>
                            </div>
                            <div class="info-phn-number">
                                <p>+091111111111</p>
                                <p>+091111111111</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <a href="#">infocreativetechnicalinstitute@gmail.com</a>
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