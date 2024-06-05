<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI GPM | Universitas Suryakancana</title>
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

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">

    @yield('css')
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

    <div class="page-wrapper" style="min-height: 750px;">

        <!--Start Main Header One -->
        <header class="main-header main-header-one">
            <div class="main-header-one__top">
                <div class="container">
                    <div class="main-header-one__top-inner">
                        <div class="main-header-one__top-left">
                            <div class="header-contact-info-one">
                                <ul>
                                    @guest
                                        
                                    @else
                                        <li>
                                            <!-- <div class="icon">
                                                <span class="icon-phone-call"></span>
                                            </div> -->
                                            <p><a href="tel:1378902167">{{$user->nama}}</a></p>
                                        </li>
                                    @endguest   
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
                                <div class="logo-box-one" style="width: 150px; height: 150px; overflow: hidden; padding: 15px;">
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
                                                    @guest
                                                    <li><a href="{{ route('home')}}">Beranda</a></li>
                                                    @else
                                                    <li><a href="{{ route('home')}}">Beranda</a></li>
                                                    @endguest
                                                    <li class="menu-item-has-children"><a href="#">Profile</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="{{ route('profil.detail', 'Profil GPM FT Unsur')  }}">Profil GPM FT Unsur</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('profil.detail', 'Visi Misi')  }}">Visi Misi</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('profil.detail', 'Organisasi dan Staff GPM')  }}">Organisasi dan Staff GPM</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('profil.detail', 'Tugas Pokok dan Fungsi')  }}">Tugas Pokok dan Fungsi</a>
                                                            </li>
                                                            <li>    
                                                                <a href="{{ route('profil.detail', 'Program Kerja')  }}">Program Kerja</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('berita.list') }}">Berita</a></li>
                                                    <li><a href="{{ route('akreditasi.list') }}">Akreditasi</a></li>
                                                    <li class="menu-item-has-children"><a href="#">Master Data</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="{{ route('dokumen.get_list', 'Dokumen')  }}">Dokumen</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dokumen.get_list', 'Kegiatan Mutu')  }}">Kegiatan Mutu</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dokumen.get_list', 'Laporan')  }}">Laporan</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    @guest

                                                    @else

                                                    @if ($user->id_role == 1 || $user->id_role == 3)
                                                    <li class="menu-item-has-children"><a href="#">Master</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="{{ route('dokumen.index') }}">Kelola Dokumen</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('survey.index') }}">Kelola Survey</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('akreditasi.list_gpm') }}">Kelola Akreditasi</a>
                                                            </li>
                                                            @if ($user->id_role == 1)
                                                                
                                                                <li>
                                                                    <a href="{{ route('profil.index') }}">Kelola Profile</a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('berita.index') }}">Kelola Berita</a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </li>
                                                    @endif
                                                    @endguest
                                                    <li class="menu-item-has-children"><a href="#">Survey</a>
                                                        <ul id="specific-menu">
                                                            <!-- Here for survey -->
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

        @yield('content')

            <!--Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom__inner">
                        <div class="copyright-text text-center">
                            <p>Copyright © 2024 SI GPM | Universitas Suryakancana </p>
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
    
    @include('sweetalert::alert')
    
    @yield('js')
    
    <script>

        $(document).ready(function() {
            $('#elemenSelect').on('change', function() {
                var elemen = $(this).val();
                var kategori = "{{ $kategori ?? 'default_value' }}";

                if (elemen) {
                    $.ajax({
                        url: `/akreditasi/highest-no-urut/${kategori}/${elemen}`,
                        type: 'GET',
                        success: function(data) {
                            console.log('Fetched data:', data);
                            var noUrutField = $('#noUrut');
                            noUrutField.prop('disabled', true);
                            noUrutField.val(data.no_urut ? data.no_urut + 1 : 1);
                            var noUrutFieldValue = $('#noUrutValue');
                            noUrutFieldValue.prop('disabled', false);
                            noUrutFieldValue.val(data.no_urut ? data.no_urut + 1 : 1);
                        },
                        error: function(error) {
                            console.error('Error fetching no_urut:', error);
                        }
                    });
                } else {
                    var noUrutField = $('#noUrut');
                    noUrutField.val('');
                    noUrutField.prop('disabled', true);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('survey.get_list') }}",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var surveyList = response;
                    var ul = $('<ul>').addClass('sub-menu');
                    $.each(surveyList, function(index, item) {
                        var li = $('<li>');
                        var a = $('<a>').attr('href', item.tautan_survey).attr('target', '_blank').text(item.nama_survey);
                        li.append(a);
                        ul.append(li);
                    });
                    $('#specific-menu').replaceWith(ul);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

    </script>
</body>

</html>