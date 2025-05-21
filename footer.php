<?php
    $query_Recordset6 = "SELECT * FROM `gallery` LIMIT 4";
    $Recordset6 = mysqli_query( $creative_technical_institute, $query_Recordset6 )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset6 = mysqli_fetch_assoc( $Recordset6 );
    $totalRows_Recordset6 = mysqli_num_rows( $Recordset6 );

    $query_Recordset7 = "SELECT * FROM `course` LIMIT 6";
    $Recordset7 = mysqli_query( $creative_technical_institute, $query_Recordset7 )or die( mysqli_error( $creative_technical_institute ) );
    $row_Recordset7 = mysqli_fetch_assoc( $Recordset7 );
    $totalRows_Recordset7 = mysqli_num_rows( $Recordset7 );
?>
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image: url(img/bg/bg-4.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>
                                At Creative Technical Institute, we believe in empowering youth through
                                industry-relevant, hands-on technical education.
                            </p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Jamshedpur, Jharkhand</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">infocreativetechnicalinstitute@gmail.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +98 558 547 589</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="course.php">Courses</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <?php if($totalRows_Recordset7 > 0) { 
                                do { ?>
                                <li><a href="course-details.php?course_id=<?php echo $row_Recordset7['course_id']; ?>"><?php echo $row_Recordset7['course_name']; ?>
                                    </a></li>
                                <?php }while($row_Recordset7=mysqli_fetch_assoc($Recordset7)); } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <?php if($totalRows_Recordset6 > 0) { 
                                do { ?>
                                <li>
                                    <a href="gallery.php"><img height="60px"
                                            src="admin/assets/images/gallery/<?php echo $row_Recordset6['image']; ?>"
                                            alt="" /></a>
                                </li>
                                <?php }while($row_Recordset6=mysqli_fetch_assoc($Recordset6)); } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>
                                Join our mailing list to get the latest updates on new courses, upcoming events, and
                                student success stories —
                                directly in your inbox!
                            </p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                    name="mc-embedded-subscribe-form" method="post" action="">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address"
                                            name="EMAIL" value="" />
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1"
                                                name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit"
                                                name="subscribe" value="SUBMIT" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">Creative Technical Institute</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li class="text-white">Developed By</li>
                                <li><a href="https://xwaydesigns.com/website-application.html">X way Designs</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google-plus" href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>