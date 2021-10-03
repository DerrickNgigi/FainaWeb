<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    @yield('meta_data')
    @yield('optimization')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/custom-animation.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/custom.css" />
</head>
<body>

<!-- preloader  -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                        <span data-text-preloader="F" class="letters-loading">
                            F
                        </span>
                <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- header start -->
<header id="header-sticky" class="header-transparent header-text-white">
    <div class="header-area">
        <div class="container">
            <div class="position-relative">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{route('home')}}"> <img src="img/logo/logo-white.png" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 position-static">
                        <div class="main-menu red-menu white-menu text-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('about')}}">About</a>
                                    </li>
                                    <li><a href="{{route('innovations')}}">Innovations</a>
                                    </li>
                                    <li><a href="{{route('contact-us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
{{--                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">--}}
{{--                        <div class="header-btn text-right">--}}
{{--                            <a href="#" class="x-btn btn-border btn-squ x-btn-white">First Customer Discount</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<main>
    @yield('content')
</main>

<!-- footer start  -->
<footer class="gray-bg">
    <div class="footer-area pt-120 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="footer-widget mb-40">
                        <div class="footer-text">
                            <img src="img/logo/logo.png" alt="">
                            <p>Pioneering Smart Engineering Solutions</p>
                        </div>
                        <div class="footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4">
{{--                    <div class="footer-widget mb-40">--}}
{{--                        <h3>About Us</h3>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Managed Website</a></li>--}}
{{--                            <li><a href="#">Power Tools</a></li>--}}
{{--                            <li><a href="#">Marketing Service</a></li>--}}
{{--                            <li><a href="#">Customer Service</a></li>--}}
{{--                            <li><a href="#">Manage Reputation</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4">
                    <div class="footer-widget mb-40">
                        <h3 style="color: white">Quick Links</h3>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('innovations')}}">Innovations</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-border">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>Copyright © 2021 FAINA TECH. All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-menu text-left text-md-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->






<!-- JS here -->
<script src="<?php echo url('/'); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?php echo url('/'); ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
<script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo url('/'); ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo url('/'); ?>/js/one-page-nav-min.js"></script>
<script src="<?php echo url('/'); ?>/js/slick.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo url('/'); ?>/js/ajax-form.js"></script>
<script src="<?php echo url('/'); ?>/js/wow.min.js"></script>
<script src="<?php echo url('/'); ?>/js/aos.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo url('/'); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo url('/'); ?>/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<script src="<?php echo url('/'); ?>/js/plugins.js"></script>
<script src="<?php echo url('/'); ?>/js/main.js"></script>
</body>
</html>
