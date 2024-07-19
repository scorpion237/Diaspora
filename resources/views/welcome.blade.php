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

        <!-- Slider/Intro Section Start -->
        <div class="intro-slider-wrap section">
            <div class="intro-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-1.jpg">

                            <div class="container">
                                <div class="row row-cols-lg-1 row-cols-1">

                                    <div class="col align-self-center">
                                        <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                                            <h2 class="title">Designing awesome brands & experiences </h2>
                                            <div class="desc">
                                                <p>We are an agency located in New York. We think strategy, craft
                                                    design,
                                                    develop digital and create motion. To forward your brand and
                                                    business.</p>
                                            </div>
                                            <a href="#" class="btn btn-primary btn-hover-secondary">Get Started</a>
                                            <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-2.jpg">

                            <div class="container">
                                <div class="row row-cols-lg-1 row-cols-1">

                                    <!-- Intro One Content Start -->
                                    <div class="col align-self-center">
                                        <div class="intro-content mt-8">
                                            <h2 class="title">Designing awesome brands & experiences </h2>
                                            <div class="desc">
                                                <p>We are an agency located in New York. We think strategy, craft
                                                    design,
                                                    develop digital and create motion. To forward your brand and
                                                    business.</p>
                                            </div>
                                            <a href="course-details-free.html"
                                                class="btn btn-primary btn-hover-secondary">Get Started</a>
                                            <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                        </div>
                                    </div>
                                    <!-- Intro One Content End -->

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-3.jpg">

                            <div class="container">
                                <div class="row row-cols-lg-1 row-cols-1">

                                    <!-- Intro One Content Start -->
                                    <div class="col align-self-center max-mb-30">
                                        <div class="intro-content mt-8">
                                            <h2 class="title">Designing awesome brands & experiences </h2>
                                            <div class="desc">
                                                <p>We are an agency located in New York. We think strategy, craft
                                                    design,
                                                    develop digital and create motion. To forward your brand and
                                                    business.</p>
                                            </div>
                                            <a href="course-details-free.html"
                                                class="btn btn-primary btn-hover-secondary">Get Started</a>
                                            <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                        </div>
                                    </div>
                                    <!-- Intro One Content End -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fal fa-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fal fa-angle-right"></i>
                </div>
            </div>
        </div>
        <!-- Slider/Intro Section End -->

        <!-- About Section Start -->
        <div class="section section-padding-t90 section-padding-bottom-190">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up">
                    <h2 class="title">We are a full-service creative agency</h2>
                    <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                        <br> who love what they do and love where they work
                    </p>
                </div>
                <!-- Section Title End -->

                <!-- About Wrapper Start -->
                <div class="row">

                    <!-- About Image Area Start -->
                    <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                        <div class="about-image-area">
                            <div class="about-image js-tilt">
                                <img src="assets/images/about/home-one-about/home_agency_about_1.jpg" alt="">
                            </div>
                            <div class="about-image js-tilt">
                                <img src="assets/images/about/home-one-about/home_agency_about_2.jpg" alt="">
                            </div>
                            <!-- Animation Shape Start -->
                            <div class="shape shape-1 scene">
                                <span data-depth="1"><img src="assets/images/shape-animation/about-shape-1.png"
                                        alt=""></span>
                            </div>
                            <!-- Animation Shape End -->
                        </div>
                    </div>
                    <!-- About Image Area Start -->

                    <!-- About Start -->
                    <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                        <!-- About Content Area Start -->
                        <div class="about-content-area">
                            <!-- Section Title Two Start -->
                            <div class="section-title-two">
                                <span class="sub-title">Every day brings new challenges</span>
                                <h3 class="title">Creative agency focused on vision, product and people</h3>
                            </div>
                            <!-- Section Title Two End -->

                            <p>We’re boldly individual, always original and refreshingly easy-going. Our vision, passion
                                and ideas are matched
                                with focus, expertise and flair.</p>

                            <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">About
                                Us</a>
                        </div>
                        <!-- About Content Area Start -->
                    </div>
                    <!-- About Start -->

                </div>
                <!-- About Wrapper End -->

            </div>
        </div>
        <!-- About Section End -->

        <!-- Skill With Video Section Start -->
        <div class="section section-padding" data-bg-color="#f8faff">

            <div class="container">

                <div class="row">

                    <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                        <!-- Skill With Video Content Start -->
                        <div class="skill-with-video-content">
                            <!-- Section Title Two Start -->
                            <div class="section-title-two mb-8">
                                <span class="sub-title">Development that converts and delivers</span>
                                <h3 class="title">We offer the tools and skills that your company deserves</h3>
                            </div>
                            <!-- Section Title Two End -->

                            <!-- Agency List Start -->
                            <ul class="agency-list">
                                <li class="item">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">Ongoing maintenance to your website and server</div>
                                </li>
                                <li class="item">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">We have produced hundreds of website designs</div>
                                </li>
                                <li class="item">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">Strategic consulting in online marketing</div>
                                </li>
                                <li class="item">
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">We work with all the major payment processors</div>
                                </li>
                            </ul>
                            <!-- Agency List End -->
                        </div>
                        <!-- Skill With Video Content End -->
                    </div>

                    <div class="offset-xl-1 col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                        <!-- Skill With Video Popup Start -->
                        <div class="video-popup-area">
                            <!-- Video Popup Start -->
                            <div class="skill-video" data-aos="fade-up">
                                <img class="image" src="assets/images/video/skill-video.jpg" alt="video popup">
                                <a href="https://www.youtube.com/watch?v=eS9Qm4AOOBY" class="icon video-popup"><i
                                        class="fas fa-play"></i></i></a>
                            </div>
                            <!-- Video Popup End -->

                            <!-- Animation Shape Start -->
                            <div class="shape shape-1 scene">
                                <span data-depth="1">
                                    <img src="assets/images/shape-animation/video-shape-1.png" alt="">
                                </span>
                            </div>
                            <!-- Animation Shape End -->
                        </div>
                        <!-- Skill With Video Popup End -->
                    </div>

                </div>

            </div>

        </div>
        <!-- Skill With Video Section End -->

        <!-- Service Section Start -->
        <div class="section section-padding-t90-b100">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center mb-12" data-aos="fade-up">
                    <h2 class="title fz-32">We create a unique action plan for brands</h2>
                    <p class="sub-title">Get your company heading in the right direction with our digital
                        <br> marketing strategist
                    </p>
                </div>
                <!-- Section Title End -->

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">

                    <!-- Icon Box Start -->
                    <div class="col mb-6" data-aos="fade-up">

                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon"><img class="svgInject"
                                    src="assets/images/svg/linea/linea-basic-target.svg" alt=""></div>
                            <div class="content">
                                <h3 class="title">Branding</h3>
                                <div class="desc">
                                    <p>First impressions count! Make sure your brand works for you. We
                                        offer digital marketing.</p>
                                </div>
                                <a href="#" class="link">Learn More</a>
                            </div>
                        </div>

                    </div>
                    <!-- Icon Box End -->

                    <!-- Icon Box Start -->
                    <div class="col mb-6" data-aos="fade-up">

                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon"><img class="svgInject"
                                    src="assets/images/svg/linea/linea-basic-picture-multiple.svg" alt=""></div>
                            <div class="content">
                                <h3 class="title">UX Design</h3>
                                <div class="desc">
                                    <p>First impressions count! Make sure your brand works for you. We
                                        offer digital marketing.</p>
                                </div>
                                <a href="#" class="link">Learn More</a>
                            </div>
                        </div>

                    </div>
                    <!-- Icon Box End -->

                    <!-- Icon Box Start -->
                    <div class="col mb-6" data-aos="fade-up">

                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon"><img class="svgInject"
                                    src="assets/images/svg/linea/linea-basic-life-buoy.svg" alt=""></div>
                            <div class="content">
                                <h3 class="title">Strategy</h3>
                                <div class="desc">
                                    <p>First impressions count! Make sure your brand works for you. We
                                        offer digital marketing.</p>
                                </div>
                                <a href="#" class="link">Learn More</a>
                            </div>
                        </div>

                    </div>
                    <!-- Icon Box End -->

                </div>

            </div>
        </div>
        <!-- Service Section End -->

        <!-- Success Section Start -->
        <div class="section section-padding-top section-padding-bottom-200" data-bg-color="#f8faff">
            <div class="container">
                <div class="row">
                    <!-- Success Content Start -->
                    <div class="col-lg-5" data-aos="fade-up">
                        <div class="success-content">
                            <!-- Section Title Two Start -->
                            <div class="section-title-two mb-lg-8 mb-6">
                                <span class="sub-title">Your success is our success</span>
                                <h3 class="title">Web design, marketing & SEO solutions that get results</h3>
                            </div>
                            <!-- Section Title Two End -->

                            <p class="mb-0">Increase visibility to increase profits. We help our clients increase
                                profits by increasing their visibility online. If your clients can’t find you, your
                                website is useless.</p>

                            <a class="btn btn-primary btn-hover-secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4" href="#">Get
                                Started</a>
                        </div>

                    </div>
                    <!-- Success Content End -->

                    <!-- Success Image Start -->
                    <div class="offset-lg-1 col-lg-6" data-aos="fade-up">
                        <div class="success-image-wrap">
                            <div class="success-image js-tilt">
                                <img src="assets/images/success/success-1.jpg" alt="success-1">
                            </div>
                            <div class="success-image js-tilt">
                                <img src="assets/images/success/success-2.jpg" alt="success-1">
                            </div>

                            <!-- Animation Shape Start -->
                            <div class="shape shape-1 scene">
                                <span data-depth="1"><img src="assets/images/shape-animation/video-shape-1.png"
                                        alt="shape"></span>
                            </div>
                            <!-- Animation Shape End -->
                        </div>
                    </div>
                    <!-- Success Image End -->
                </div>
            </div>
        </div>
        <!-- Success Section End -->

        <!-- Portfolio Section Start -->
        <div class="section section-padding-t90 ag-masonary-wrapper">
            <div class="container-fluid px-0">
                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up">
                    <h2 class="title fz-32">Great brands deserve even greater creative works</h2>
                </div>
                <!-- Section Title End -->

                <!-- Portfolio Menu Start -->
                <div class="messonry-button text-center mb-lg-13 mb-md-13 mb-6" data-aos="fade-up">
                    <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                    <button data-filter=".cat-1"><span class="filter-text">App</span></button>
                    <button data-filter=".cat-2"><span class="filter-text">Development</span></button>
                    <button data-filter=".cat-3"><span class="filter-text">Marketing</span> </button>
                    <button data-filter=".cat-4"><span class="filter-text">Software</span></button>
                    <button data-filter=".cat-5"><span class="filter-text">UX Design</span></button>
                </div>
                <!-- Portfolio Menu End -->

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-0 mesonry-list">
                    <div class="resizer col"></div>
                    <!-- Single Portfolio Start -->
                    <div class="col cat-1 cat-3">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-1.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                    <!-- Single Portfolio Start -->
                    <div class="col cat-2 cat-5">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-2.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                    <!-- Single Portfolio Start -->
                    <div class="col cat-3 cat-2">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-3.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                    <!-- Single Portfolio Start -->
                    <div class="col cat-4 cat-3">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-4.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                    <!-- Single Portfolio Start -->
                    <div class="col cat-5">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-5.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                    <!-- Single Portfolio Start -->
                    <div class="col cat-2">
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <img class="img-fluid" src="assets/images/portfolio/portfolio-6.jpg" alt="Portfolio-01">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">Project Name #1 <img
                                            src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Portfolio End -->
                </div>
            </div>
        </div>
        <!-- Portfolio Section End -->

        <!-- Blog Section Start -->
        <div class="section section-padding-t90-b100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-lg-12 mb-md-6" data-aos="fade-up">
                            <span class="sub-title">Latest marketing news and management insights</span>
                            <h3 class="title">We bring you all the latest marketing news and the most interesting stats
                                for marketers</h3>
                        </div>
                        <!-- Section Title Two End -->
                    </div>
                    <div class="col-lg-4">
                        <div class="section-button text-lg-right text-left mb-md-8 mb-sm-6 mb-6" data-aos="fade-up">
                            <a href="#" class="btn btn-primary ">Visit Blog</a>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Single Blog Start -->
                        <div class="blog">
                            <div class="thumbnail">
                                <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-1.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="info">
                                <h3 class="title"><a href="blog-details.html">How your sales can work together in
                                        account-based marketing</a></h3>
                                <p class="desc">Tom Hileman leads an award-winning agency to deliver high-touch,
                                    data-driven marketing solutions for leading organizations...</p>
                                <a href="#" class="link "> <mark>Read More</mark> </a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Single Blog Start -->
                        <div class="blog">
                            <div class="thumbnail">
                                <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-2.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="info">
                                <h3 class="title"><a href="blog-details.html">The six things marketers need to
                                        understand about DTC marketing</a></h3>
                                <p class="desc">As brick-and-mortar retail has winnowed to bare existence,
                                    direct-to-consumer (DTC) marketing is emerging as both a need...</p>
                                <a href="#" class="link "> <mark>Read More</mark> </a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Single Blog Start -->
                        <div class="blog">
                            <div class="thumbnail">
                                <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-3.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="info">
                                <h3 class="title"><a href="blog-details.html">Eleven top tips for developing agile
                                        marketing strategies that work</a></h3>
                                <p class="desc">Tom Hileman leads an award-winning agency to deliver high-touch,
                                    data-driven marketing solutions for leading organizations...</p>
                                <a href="#" class="link "> <mark>Read More</mark> </a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter Section Start -->
        <div class="section section-padding-t110-b120 newsletter-section" data-overlay="0.7"
            data-bg-image="assets/images/bg/newsletter.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- Newsletter Content Start -->
                        <div class="newsletter-content mb-lg-0 mb-6">
                            <!-- Section Title Start -->
                            <div class="section-title color-light text-left mb-0" data-aos="fade-up">
                                <h2 class="title">Let’s find out how to work together</h2>
                                <p class="sub-title fz-18 ml-0">Ready to start your project? The contact information
                                    collected through <br>
                                    this form will only be used to send a response to your inquiry.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Newsletter Content End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form ml-xl-7 ml-lg-0" data-aos="fade-up">
                            <form action="#">
                                <input type="email" placeholder="Ente your email" name="mail">
                                <button class="subscribe-btn"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                </div>
            </div>

            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="assets/images/shape-animation/newsletter-shape.png" alt="">
                </span>
            </div>
            <!-- Animation Shape End -->
        </div>
        <!-- Newsletter Section End -->

        <!-- Contact Information Section Start -->
        <div class="section section-padding-t90-b100">
            <div class="container shape-animate">
                <!-- Section Title Start -->
                <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                    <h2 class="title fz-32">Contact us today, let’s get to know each other</h2>
                    <p class="sub-title">We are ready to answer all your questions! When you partner with us,
                        <br> you get more than a contract. We are committed to your success
                    </p>
                </div>
                <!-- Section Title End -->

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="assets/images/svg/linea/linea-basic-map.svg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Our Locations</h4>
                                <span class="info-text"> 110 W 34th St, NYC. <br>
                                    67 Madison Avenue.</span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="assets/images/svg/linea/linea-basic-message-txt.svg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Give Us A Call</h4>
                                <span class="info-text"> (+1) 212-946-2701 <br>
                                    (+1) 212-946-2702</span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                    <div class="col mb-6" data-aos="fade-up">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject" src="assets/images/svg/linea/linea-basic-mail-open-text.svg"
                                    alt="">
                            </div>
                            <div class="info">
                                <h4 class="title"> Help Desk</h4>
                                <span class="info-text">
                                    <a href="#">hello@hasthemes.com</a>
                                    <br>
                                    <a href="#">sales@hasthemes.com</a>
                                </span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </div>
                </div>

                <!-- Animation Shape Start -->
                <div class="shape shape-1 scene">
                    <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
                </div>
                <!-- Animation Shape End -->

            </div>
        </div>
        <!-- Contact Information Section End -->

        <div class="footer-section section" data-bg-color="#030e22">
            <div class="container">

                <!-- Footer Top Widgets Start -->
                <div class="row mb-lg-14 mb-md-10 mb-6">

                    <!-- Footer Widget Start -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-12 mb-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo/footer-logo.png"
                                        alt="Agency Logo"></a>
                            </div>
                            <div class="footer-widget-content">
                                <div class="content">


                                    <p><a href="#">(+1) 212-946-2701</a></p>
                                    <p><a href="#">hello@hasagency.com</a> </p>
                                </div>
                                <div class="footer-social-inline">
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Services</h4>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">SEO/SEM</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">UX Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Products</h4>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="#">Elementor Guru</a></li>
                                    <li><a href="#">WooLentor Pro</a></li>
                                    <li><a href="#">Plugins <span class="ft-badge">New</span></a></li>
                                    <li><a href="#">Page Builder</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">About</h4>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Our Partners</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Contact</h4>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="#">Support Ticket</a></li>
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                </div>
                <!-- Footer Top Widgets End -->

                <!-- Footer Copyright Start -->
                <div class="row">
                    <div class="col">
                        <p class="copyright">© 2021 <strong>Agench</strong> Made with <i class="fas fa-heart text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/"><strong>HasThemes</strong></a>.</p>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->
    </div>

    <div id="site-main-mobile-menu" class="site-main-mobile-menu">
        <div class="site-main-mobile-menu-inner">
            <div class="mobile-menu-header">
                <div class="mobile-menu-logo">
                    <a href="index.html"><img src="assets/images/logo/light-logo.png" alt=""></a>
                </div>
                <div class="mobile-menu-close">
                    <button class="toggle">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-menu-content">
                <nav class="site-mobile-menu">
                    <ul>
                        <li>
                            <a href="index.html"><span class="menu-text">Homepage</span></a>
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
                                <li><a href="work-details.html"><span class="menu-text">Work Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Blog</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="blog-classic.html"><span class="menu-text">Blog Classic</span></a></li>
                                <li><a href="blog-details.html"><span class="menu-text">Blog Details</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/svg-inject.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/vanilla-tilt.min.js"></script>
    <script src="assets/js/plugins/vivus.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>





</body>

</html>