<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));
?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Onyemachi Foundation – Empowering Lives Through Education, Healthcare & Community Support</title>

    <meta name="description" content="Onyemachi Foundation is a non-profit organization empowering children, youths, and families across Africa through education, healthcare, and community development initiatives.">
    <meta name="keywords" content="Onyemachi Foundation, NGO in Nigeria, charity organization Africa, education charity, healthcare outreach Africa, empowerment programs, non-profit organization, community development Nigeria">

    <meta name="author" content="Onyemachi Foundation">
    <meta name="robots" content="index, follow">

    <!-- ============================
         Mobile Optimization
    ============================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ============================
         Favicon
    ============================= -->
    <link rel="icon" type="image/x-icon" href="assets/img/portfolio/favicon.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ============================
         SOCIAL MEDIA / OPEN GRAPH
    ============================= -->
    <meta property="og:title" content="Onyemachi Foundation – Empowering Dreams, Transforming Lives">
    <meta property="og:description" content="We provide access to education, healthcare, and empowerment programs that uplift communities across Africa. Join us in making a difference.">
    <meta property="og:image" content="https://www.yourwebsite.com/assets/img/portfolio/logo1.png">
    <meta property="og:url" content="https://www.yourwebsite.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Onyemachi Foundation – Empowering Communities">
    <meta name="twitter:description" content="A non-profit organization dedicated to improving the lives of children, families, and communities through education and healthcare programs.">
    <meta name="twitter:image" content="https://www.yourwebsite.com/assets/img/portfolio/logo1.png">
    <meta name="twitter:card" content="summary_large_image">

    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css');?>">

    <style>

    
.shadow-bg {
    position: relative;
    display: inline-block;
    
}

.shadow-bg::after {
    content: "";
    position: absolute;
    bottom: -18px;
    left: 50%;
    transform: translateX(-47%);
    width: 100%;
    height: 400px;
    background: #dff7ff;
    border-radius: 12px;
    z-index: -1;
}
.custom-img {
    border-radius: 10%;
    display: block;
}

    </style>
</head>

<body>


    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img style="padding: 30px" src="assets/img/portfolio/logo1.png" alt="ONYEMACHI FOUNDATION LOGO"></a>
            </div>
            <div class="th-mobile-menu">
               <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                               <li><a href="about.php">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Initiatives</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Education</a></li>
                                        <li><a href="">Healthcare</a></li>
                                        <li><a href="">Empowerment</a></li>
                                    </ul>
                                </li>
                               <li><a href="">Projects</a></li>
                               <li><a href="">Donations</a></li>
                               
                            </ul>
            </div>
        </div>
    </div>
   
    <header class="th-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container">
                <div class="menu-area">
                    <div class="header-logo">
                        <a href=""><img style="width: 180px; padding: 10px" src="assets/img/portfolio/logo1.png" alt="ONYEMACHI FOUNDATION LOGO"></a>
                    </div>
                    <div class="menu-area-wrap">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li>
                                    <a class="<?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
                                </li>
                               <li><a href="about.php">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Initiatives</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Education</a></li>
                                        <li><a href="">Healthcare</a></li>
                                        <li><a href="">Empowerment</a></li>
                                    </ul>
                                </li>
                               <li><a href="">Projects</a></li>
                               <li><a href="">Donations</a></li>
                               
                            </ul>
                        </nav>
                        <p class="header-notice"><img class="me-1" src="assets/img/icon/heart-icon.svg" alt="img">Are you ready to help them? Let’s become a volunteers...</p>
                    </div>
                    <div class="header-button">
                       
                      <a href="" class="th-btn style3 d-xl-block d-none"><i class="fas fa-heart me-2"></i> Donate Now</a>
                        <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
