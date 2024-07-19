<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Agency - Bootstrap 5 Template</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome-pro.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome-pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/muli-font.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div id="page" class="section">
        <!-- Header Section Start -->
        <div class="header-section header-transparent sticky-header section">
            <div class="header-inner">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-auto order-0">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="assets/images/logo/light-logo.png" alt="Agency Logo">
                                    <img class="light-logo" src="assets/images/logo/light-logo.png" alt="Agency Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Main Menu Start -->
                        <div
                            class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
                            <div class="menu-column-area d-none d-xl-block position-static">
                                <nav class="site-main-menu">
                                    <ul>
                                        <li>
                                            <a class="active" href="index.html"><span
                                                    class="menu-text">Homepage</span></a>
                                        </li>
                                        <li>
                                            <a href="about.html"><span class="menu-text">About Us</span></a>
                                        </li>
                                        <li>
                                            <a href="service.html"><span class="menu-text">Services</span></a>
                                        </li>
                                        <li class="has-children">
                                            <a href="work.html"><span class="menu-text">Work</span></a>
                                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="work.html"><span class="menu-text">Work</span></a></li>
                                                <li><a href="work-details.html"><span class="menu-text">Work
                                                            Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#"><span class="menu-text">Blog</span></a>
                                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="blog-classic.html"><span class="menu-text">Blog
                                                            Classic</span></a></li>
                                                <li><a href="blog-details.html"><span class="menu-text">Blog
                                                            Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Search Start -->
                            <div class="header-search-area ml-xl-7 ml-0">

                                <!-- Header Login Start -->
                                <div class="header-search">
                                    <a href="javascript:void(0)" class="header-search-toggle"><i
                                            class="pe-7s-search pe-2x pe-va"></i></a>
                                </div>
                                <!-- Header Login End -->
                            </div>
                            <!-- Header Search End -->

                            <!-- Header Mobile Menu Toggle Start -->
                            <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                <button class="toggle">
                                    <i class="icon-top"></i>
                                    <i class="icon-middle"></i>
                                    <i class="icon-bottom"></i>
                                </button>
                            </div>
                            <!-- Header Mobile Menu Toggle End -->
                        </div>
                        <!-- Header Main Menu End -->

                        <!-- Header Right Start -->
                        <div class="col-xl-2 col d-none d-sm-flex justify-content-end order-1 order-xl-2">
                            <a href="contact-us.html" class="btn btn-light btn-hover-primary">Contact Us</a>
                        </div>
                        <!-- Header Right End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->

        <!-- Main Search Start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="pe-7s-close"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- Main Search End -->

