<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diligent || Responsive HTML 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/01-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/02-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/03-jquery.magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/04-nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/05-odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/06-swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/07-animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/08-custom-animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/09-slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/10-icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom-animate/custom-animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jarallax/jarallax.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/gilroy/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>

<body class="body-gray-bg">

    <!--Start Preloader -->
    <div id="preloader" class="alt">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!--End Preloader-->


    <div class="page-wrapper">

        <!--Start Main Header One -->
        <header class="main-header main-header-one">
            <div class="main-header-one__top">
                <div class="container">
                    <div class="main-header-one__top-inner">
                        <div class="main-header-one__top-left">
                            <div class="header-contact-info-one">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <p><a href="tel:1378902167">+1 378 902 167</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <p><a href="mailto:info@example.com">Support@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-header-one__top-right">
                            <div class="header-social-link-one">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-header-one__bottom">
                <div id="sticky-header" class="menu-area">
                    <div class="container">
                        <div class="main-header-one__bottom-inner">

                            <div class="main-header-one__bottom-left">
                                <div class="logo-box-one" style="width: 150px; height: 150px; overflow: hidden; padding: 25px;">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/img/resource/logo-ft-unsur.png')}}" alt="Logo" >
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-middle">
                                <div class="menu-area__inner">
                                    <div class="mobile-nav-toggler">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="menu-wrap">
                                        <nav class="menu-nav">
                                            <div class="navbar-wrap main-menu">
                                                <ul class="navigation">
                                                    <li><a href="#">Beranda</a></li>
                                                    <li class="menu-item-has-children"><a href="#">Profile</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="services.html">Profil GPM FT Unsur</a>
                                                            </li>
                                                            <li>
                                                                <a href="app-development.html">Visi Misi</a>
                                                            </li>
                                                            <li>
                                                                <a href="uiux-design.html">Organisasi dan Staff GPM</a>
                                                            </li>
                                                            <li>
                                                                <a href="web-development.html">Tugas Pokok dan Fungsi</a>
                                                            </li>
                                                            <li>
                                                                <a href="digital-marketing.html">Program Kerja</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Berita</a></li>
                                                    <li><a href="#">Akreditasi</a></li>
                                                    <li><a href="#">Master Dokumen</a></li>
                                                    @if ($user->id_role == 1 || $user->id_role == 3)
                                                    <li class="menu-item-has-children"><a href="#">Master Data</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="blog.html">Kelola Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html">Kelola Berita</a>
                                                            </li>
                                                            @if ($user->id_role == 1)
                                                                <li>
                                                                    <a href="blog.html">Kelola Dokumen</a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog.html">Kelola Survey</a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog.html">Kelola Akreditasi</a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </li>
                                                    @endif
                                                    <li class="menu-item-has-children"><a href="#">Survey</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="blog.html">Survey Kepuasan Lulusan Alumni</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html">Survey Kepuasan Mahasiswa</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html">Survey Kepuasan Tenaga Didik</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html">Survey Kepuasan Dosen</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-right">

                                <div class="header-btn-box-one">
                                    
                                    @guest
                                        @if (Route::has('login'))
                                        <a class="thm-btn" href="{{ route('login') }}">
                                            <span class="txt">Login</span>
                                        </a>
                                        @endif
                                    @else
                                        <a class="thm-btn" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <span class="txt">Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        <!-- <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li> -->
                                    @endguest
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--Start Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="nav-logo">
                        <a href="index.html">
                            <img src="assets/img/resource/mobile-menu-logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <div class="contact-info">
                        <div class="icon-box"><span class="icon-phone-call"></span>
                        </div>
                        <p><a href="tel:123456789">(629) 555-0129</a></p>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
            <!-- End Mobile Menu -->
        </header>
        <!--End Main Header One -->

        <!--Start Banner One-->
        <section class="banner-one">
            <div class="banner-one__shape1 float-bob-x">
                <img src="assets/img/shape/banner-one__shape1.png" alt="#">
            </div>
            <div class="banner-one__shape2 rotate-me">
                <img src="assets/img/shape/banner-one__shape2.png" alt="#">
            </div>
            <div class="banner-one__shape3 float-bob-y">
                <img src="assets/img/shape/banner-one__shape3.png" alt="#">
            </div>
            <div class="container">
                <div class="banner-one__inner">
                    <div class="banner-one__content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="sub-title">
                            <h5>Senior Web Developer</h5>
                        </div>
                        <div class="big-title">
                            <h2>Hi I’m Jhon Smith<br>Web Developer</h2>
                        </div>
                        <div class="text">
                            <p>There are many variations of passages of available, but the<br> majority have suffered
                                randomised words.</p>
                        </div>
                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">
                                    Just Say Hello
                                    <i class="icon-next"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="banner-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner">
                            <img src="assets/img/slider/banner-one__mian-img.jpg" alt="banner">
                        </div>
                        <div class="banner-one__img-bg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner One-->

        <!--Start Skills One-->
        <section class="skills-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h4></h4>
                    </div>
                    <h2>Dokumen SPMI</h2>
                </div>
                <div class="row">
                    <!--Start Single Skills One-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                        <div class="skills-one__single">
                            <div class="skills-one__single-inner">
                                <div class="skills-one__single-left-box">
                                    <!-- <div class="skills-one__single-icon">
                                        <img src="assets/img/icon/skills/skills1-1.png" alt="#">
                                    </div> -->
                                    <div class="skills-one__single-title">
                                        <h3>STANDAR SPMI</h3>
                                        <!-- <p>Senior Web Developer</p> -->
                                    </div>
                                </div>
                                <div class="skills-one__single-right-box">
                                    <div class="skills-one__single-btn-box">
                                        <a href="#"><span class="icon-up-right-arrow"></span></a>
                                    </div>
                                    <div class="skills-one__single-date-box">
                                        <!-- <p>November 2022</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Skills One-->
                    <!--Start Single Skills One-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.1s">
                        <div class="skills-one__single">
                            <div class="skills-one__single-inner">
                                <div class="skills-one__single-left-box">
                                    <!-- <div class="skills-one__single-icon">
                                        <img src="assets/img/icon/skills/skills1-2.png" alt="#">
                                    </div> -->
                                    <div class="skills-one__single-title">
                                        <h3>FORMULIR SPMI</h3>
                                        <!-- <p>Senior Web Developer</p> -->
                                    </div>
                                </div>
                                <div class="skills-one__single-right-box">
                                    <div class="skills-one__single-btn-box">
                                        <a href="#"><span class="icon-up-right-arrow"></span></a>
                                    </div>
                                    <div class="skills-one__single-date-box">
                                        <!-- <p>November 2022</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Skills One-->
                    <!--Start Single Skills One-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.2s">
                        <div class="skills-one__single">
                            <div class="skills-one__single-inner">
                                <div class="skills-one__single-left-box">
                                    <!-- <div class="skills-one__single-icon">
                                        <img src="assets/img/icon/skills/skills1-3.png" alt="#">
                                    </div> -->
                                    <div class="skills-one__single-title">
                                        <h3>MANUAL SPMI</h3>
                                        <!-- <p>Senior Web Developer</p> -->
                                    </div>
                                </div>
                                <div class="skills-one__single-right-box">
                                    <div class="skills-one__single-btn-box">
                                        <a href="#"><span class="icon-up-right-arrow"></span></a>
                                    </div>
                                    <div class="skills-one__single-date-box">
                                        <!-- <p>November 2022</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Skills One-->
                    <!--Start Single Skills One-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.2s">
                        <div class="skills-one__single">
                            <div class="skills-one__single-inner">
                                <div class="skills-one__single-left-box">
                                    <!-- <div class="skills-one__single-icon">
                                        <img src="assets/img/icon/skills/skills1-4.png" alt="#">
                                    </div> -->
                                    <div class="skills-one__single-title">
                                        <h3>KEBIJAKAN SPMI</h3>
                                        <!-- <p>Senior Web Developer</p> -->
                                    </div>
                                </div>
                                <div class="skills-one__single-right-box">
                                    <div class="skills-one__single-btn-box">
                                        <a href="#"><span class="icon-up-right-arrow"></span></a>
                                    </div>
                                    <div class="skills-one__single-date-box">
                                        <!-- <p>November 2022</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Skills One-->
                </div>
            </div>
        </section>
        <!--End Skills One-->

        <!--Start Blog One-->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <!-- <div class="sub-title">
                        <h4>Berita</h4>
                    </div> -->
                    <h2>Berita</h2>
                </div>
                <div class="row">
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-1.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Design</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">Sharing You and Your Company<br>with The World</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-2.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Development</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">I Will Deliver The Digital Results<br>As You
                                            Desire</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-3.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Design</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">Will Reach Your Audience and<br>Convert Your
                                            Leads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                </div>
                <div class="row">
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-1.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Design</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">Sharing You and Your Company<br>with The World</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-2.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Development</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">I Will Deliver The Digital Results<br>As You
                                            Desire</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img-box">
                                <img src="assets/img/blog/blog-one-3.jpg" alt="#">
                            </div>
                            <div class="blog-one__single-content">
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>
                                            <div class="line"></div>
                                            <p><a href="#">Design</a></p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p><a href="#">Sep 30, 2022</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-one__single-content-meta-box-title-box">
                                    <h3><a href="blog-details.html">Will Reach Your Audience and<br>Convert Your
                                            Leads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                </div>
            </div>
        </section>
        <!--End Blog One-->

        <!--Start Cta One-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner text-center">
                    <div class="cta-one__shape1 float-bob-y">
                        <img src="assets/img/shape/cta-one__shape1.png" alt="#">
                    </div>
                    <div class="cta-one__shape2 float-bob-y">
                        <img src="assets/img/shape/cta-one__shape2.png" alt="#">
                    </div>
                    <div class="cta-one__shape3 rotate-me">
                        <img src="assets/img/shape/cta-one__shape3.png" alt="#">
                    </div>
                    <div class="cta-one__shape4 float-bob-x">
                        <img src="assets/img/shape/cta-one__shape4.png" alt="#">
                    </div>
                    <div class="cta-one__shape5 float-bob-x">
                        <img src="assets/img/shape/cta-one__shape5.png" alt="#">
                    </div>
                    <div class="cta-one__shape6 float-bob-y">
                        <img src="assets/img/shape/cta-one__shape6.png" alt="#">
                    </div>
                    <div class="cta-one__inner-title-box">
                        <h2>Have A Project In Mind? Let’s Get Start.</h2>
                    </div>
                    <div class="cta-one__inner-text-box">
                        <p>
                            Sedut perspiciatis omnis iste natus voluptate accusantium doloremque
                            <br>laudan totam aperiaaqus epsa quae abillo.
                        </p>
                    </div>
                    <div class="cta-one__inner-btn-box">
                        <a class="thm-btn" href="#">
                            <span class="txt">Just Say Hello</span>
                            <i class="icon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One-->

        <!--Start Get In Touch One-->
        <section class="get-in-touch-one">
            <div class="container">
                <div class="row">
                    <!--Start Get In Touch One Content-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="get-in-touch-one__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h4>Get In Touch</h4>
                                </div>
                                <h2>Have Any Questions? Feel<br>Free to Contact Me...</h2>
                            </div>
                            <ul class="get-in-touch-one__content-list-box">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>2976 Westheimer Road, Santa Valley Ana<br>New York City, 26790</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>
                                            <a href="tel:880237255">+(880) 237 255, +(880) 237 255</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>
                                            <a href="mailto:yourmailsupport@gmail.com">yourmailsupport@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Get In Touch One Content-->

                    <!--Start Get In Touch One Form Box-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="get-in-touch-one__form">
                            <form id="get-in-touch-one__form" name="contact_form" class="default-form2"
                                action="assets/inc/sendmail.php" method="post">

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_name" id="formName"
                                                    placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="form_email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" id="formPhone"
                                                    placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="form_message" id="formMessage"
                                                    placeholder="Enter your message..." required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    Send Message
                                                    <i class="icon-next"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!--End Get In Touch One Form Box-->
                </div>
            </div>
        </section>
        <!--End Get In Touch One-->


        <!--Start Footer One-->
        <footer class="footer-one">
            <!-- Start Footer Main -->
            <div class="footer-main">
                <div class="container">
                    <div class="footer-one__img1 float-bob-x">
                        <img src="assets/img/footer/footer-one-1.png" alt="#">
                    </div>
                    <div class="footer-one__img2 float-bob-y">
                        <img src="assets/img/footer/footer-one-2.png" alt="#">
                    </div>
                    <div class="footer-main__inner text-center">
                        <div class="footer-one__logo-box">
                            <a href="index.html"><img src="assets/img/logo/footer-one-1.png" alt="#"></a>
                        </div>
                        <div class="footer-one__big-title">
                            <h2>Let’s Talk with Me!</h2>
                        </div>
                        <div class="footer-one__text-box">
                            <p>We are not only better, but we are also the best in the advertisement.
                                <br>Always gives you digital graphic designing </p>
                        </div>
                        <div class="footer-one__socel-link">
                            <ul class="clearfix">
                                <li>
                                    <a href="#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-instagram-symbol"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Main -->

            <!--Start Footer Middle-->
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-middle__inner">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <p><a href="index.html">Home</a></p>
                                </li>
                                <li>
                                    <p><a href="about.html">About</a></p>
                                </li>
                                <li>
                                    <p><a href="web-development.html">Services</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Portfolio</a></p>
                                </li>
                                <li>
                                    <p><a href="blog-details.html">Blog</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-middle__mail-box">
                            <div class="icon">
                                <span class="icon-mail-inbox-app"></span>
                            </div>
                            <div class="text">
                                <p><a href="mailto:yourmailsupport@gmail.com">yourmailsupport@gmail.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Footer Middle-->

            <!--Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom__inner">
                        <div class="copyright-text text-center">
                            <p>Copyright © 2024 Diligent by <a href="https://themeforest.net/user/thememx">Thememx.</a>
                                All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer Bottom -->
        </footer>
        <!--Start Footer One-->
    </div>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-down-arrow"></i>
    </button>
    <!-- Scroll-top-end-->

    <!--Start Search Popup -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler">
            <div class="search-close-btn">
                <i class="icon-plus"></i>
            </div>
        </div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="search" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="btn-one">
                    <i class="icon-search-interface-symbol"></i>
                </button>
            </form>
        </div>
    </div>
    <!--End Search Popup -->




    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/01-ajax-form.js')}}"></script>
    <script src="{{ asset('assets/js/02-bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/03-jquery.appear.js')}}"></script>
    <script src="{{ asset('assets/js/04-swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/05-jquery.odometer.min.js')}}"></script>
    <script src="{{ asset('assets/js/06-jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/07-jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/08-slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/09-wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/10-jquery.circleType.js')}}"></script>
    <script src="{{ asset('assets/js/11-jquery.lettering.min.js')}}"></script>
    <script src="{{ asset('assets/js/12-TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/marquee/marquee.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/progress-bar/knob.js')}}"></script>




    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>