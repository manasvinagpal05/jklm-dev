<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>JKN</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="site/assets/img/logo/logo2.png" style="height:15px;">

	<!-- CSS here -->
	<link rel="stylesheet" href="site/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="site/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="site/assets/css/slicknav.css">
	<link rel="stylesheet" href="site/assets/css/flaticon.css">
	<link rel="stylesheet" href="site/assets/css/animate.min.css">
	<link rel="stylesheet" href="site/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="site/assets/css/themify-icons.css">
	<link rel="stylesheet" href="site/assets/css/slick.css">
	<link rel="stylesheet" href="site/assets/css/nice-select.css">
	<link rel="stylesheet" href="site/assets/css/style.css">
	<link rel="stylesheet" href="site/assets/css/custom.css">
    <script src="https://kit.fontawesome.com/8f70775512.js" crossorigin="anonymous"></script>
</head>

<body class="body-bg">
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="site/assets/img/logo/logo2.png" style="height:30px;" alt="">
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <x-site.site-header/>
            <x-site.site-navbar/>

        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    @yield('content')
</main>
<x-site.footer/>

    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <script src="site/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="site/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="site/assets/js/popper.min.js"></script>
    <script src="site/assets/js/bootstrap.min.js"></script>
    <script src="site/assets/js/jquery.slicknav.min.js"></script>
    <script src="site/assets/js/owl.carousel.min.js"></script>
    <script src="site/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="site/assets/js/wow.min.js"></script>
    <script src="site/assets/js/animated.headline.js"></script>
    <script src="site/assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="site/assets/js/jquery.nice-select.min.js"></script>
    <script src="site/assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="site/assets/js/jquery.counterup.min.js"></script>
    
    <!-- contact js -->
    <script src="site/assets/js/contact.js"></script>
    <script src="site/assets/js/jquery.form.js"></script>
    <script src="site/assets/js/jquery.validate.min.js"></script>
    <script src="site/assets/js/mail-script.js"></script>
    <script src="site/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="site/assets/js/plugins.js"></script>
    <script src="site/assets/js/main.js"></script>
        
    </body>
</html>
