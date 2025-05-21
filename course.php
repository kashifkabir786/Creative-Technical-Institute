<?php require_once('Connections/creative_technical_institute.php'); ?>
<?php
    // Number of records per page
    $records_per_page = 9;
    
    // Get current page number
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $records_per_page;
    
    // Get total records
    $total_query = "SELECT COUNT(*) as total FROM `course`";
    $total_result = mysqli_query($creative_technical_institute, $total_query);
    $total_row = mysqli_fetch_assoc($total_result);
    $total_records = $total_row['total'];
    $total_pages = ceil($total_records / $records_per_page);
    
    // Modified query with pagination
    $query_Recordset2 = "SELECT * FROM `course` LIMIT $offset, $records_per_page";
    $Recordset2 = mysqli_query($creative_technical_institute, $query_Recordset2) or die(mysqli_error($creative_technical_institute));
    $row_Recordset2 = mysqli_fetch_assoc($Recordset2);
    $totalRows_Recordset2 = mysqli_num_rows($Recordset2);
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
        <div class="breadcrumb-top default-overlay bg-img  pt-100 pb-95"
            style="background-image:url(img/bg/banner-1.jpg);">
            <div class="container">
                <h2>Courses</h2>
                <p>At Creative Technical Institute, we offer a diverse range of courses tailored to equip you with the
                    skills needed to thrive in today's competitive job market. </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Grid</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="event-area pt-80 pb-80">
        <div class="container">
            <div class="section-title mb-75 course-mrg-small">
                <h2>Courses</h2>
                <p> At Creative Technical Institute, we offer skill-based courses<br />
                    designed to prepare you for real-world careers. </p>
            </div>
            <div class="row">
                <?php if($totalRows_Recordset2 > 0) {
                    do { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-event mb-55 event-gray-bg">
                        <div class="event-img">
                            <a href="course-details.php?course_id=<?php echo $row_Recordset2['course_id']; ?>"><img
                                    src="admin/assets/images/course/<?php echo $row_Recordset2['image']; ?>" alt=""></a>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html"><?php echo $row_Recordset2['course_name']; ?></a></h3>
                            <p><?php
                            $description = $row_Recordset2['course_description'];
                            echo substr($description, 0, 50) . (strlen($description) > 50 ? '...' : '');
                            ?></p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-inr"></i>
                                    <span><?php echo $row_Recordset2['fees']; ?></span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span><?php echo $row_Recordset2['duration']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }while($row_Recordset2=mysqli_fetch_assoc($Recordset2)); } ?>
            </div>
            <div class="pro-pagination-style text-center mt-25">
                <ul>
                    <?php if($page > 1): ?>
                    <li><a class="prev" href="?page=<?php echo ($page-1); ?>">
                            <i class="fa fa-angle-double-left"></i>
                        </a></li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                    <li><a class="<?php echo ($i == $page) ? 'active' : ''; ?>"
                            href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>

                    <?php if($page < $total_pages): ?>
                    <li><a class="next" href="?page=<?php echo ($page+1); ?>">
                            <i class="fa fa-angle-double-right"></i>
                        </a></li>
                    <?php endif; ?>
                </ul>
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