<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Valorwide">
    <meta name="description" content="pharmex - Laboratory & Research Html Template">
    <!-- ======== Page title ============ -->
    <title>pharmex - Laboratory & Research Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.png')}}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/all.min.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/animate.css')}}">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/swiper-bundle.min.css')}}">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{asset('theme/assets/css/main.css')}}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    H
                </span>
                <span data-text-preloader="B" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="W" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    X
                </span>
            </div>
            <p class="text-center">Loading</p>
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

    <!-- Mouse Cursor Start -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>

                        <div class="header-button mt-4">
                            <a href="#" class="theme-btn text-center">
                                <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Two Start -->
    <header class="header-section-1">
        <div id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{url('/')}}" class="header-logo">
                                    <img width="150" src="{{asset('theme/assets/images/logo/logo.png')}}" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-middle">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/stock-exchange">Merch</a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}/login">Admin Login &nbsp; <span class="fa fa-lock"></span></a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/login">Merchant Login &nbsp; <span class="fa fa-user"></span></a>
                                            </li>

                                            @if(Auth::User())
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();   document.getElementById('logout-form').submit();">Logout &nbsp; <span class="fa fa-power-off"></span></a>
                                            </li>
                                            @endif




                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-search search-trigger search-icon d-none d-lg-block">
                                <input type="text">
                                <button
                                    class="search-button d-flex justify-content-center align-items-center rounded-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                        fill="none">
                                        <g clip-path="url(#clip0_43_80)">
                                            <path
                                                d="M14.8579 14.1839L10.9851 10.3731C11.9993 9.27122 12.6224 7.81401 12.6224 6.21051C12.6219 2.78032 9.79654 0 6.31104 0C2.82553 0 0.000183105 2.78032 0.000183105 6.21051C0.000183105 9.6407 2.82553 12.421 6.31104 12.421C7.81702 12.421 9.19827 11.9001 10.2832 11.0341L14.171 14.86C14.3604 15.0466 14.668 15.0466 14.8574 14.86C15.0473 14.6734 15.0473 14.3705 14.8579 14.1839ZM6.31104 11.4655C3.36192 11.4655 0.971197 9.11277 0.971197 6.21051C0.971197 3.30825 3.36192 0.955523 6.31104 0.955523C9.26018 0.955523 11.6509 3.30825 11.6509 6.21051C11.6509 9.11277 9.26018 11.4655 6.31104 11.4655Z"
                                                fill="#1B3A57" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_43_80">
                                                <rect width="15" height="15" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                            <div class="header__hamburger my-auto">
                                <div class="sidebar__toggle">
                                    <img src="{{asset('theme/assets/images/icon/slide-bar.svg')}}" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Intro Section S T A R T -->
    <section class="intro-section">
        <div class="intro-container-wrapper style1">
            <div class="container">
                <div class="intro-main">
                    <div class="intro-wrapper style1 fix" style="background-image: url('{{asset('theme/assets/images/bg/bg-1.jpg')}}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="intro-content wow fadeInUp" data-wow-delay=".3s">
                                        <h1>High Quality Drugs <br> <span class="thin-text"> Discounted </span> <span
                                                class="bold-text"> Exchange </span> </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-box">
                        <div class="shape"><img src="{{asset('theme/assets/images/shape/introShape1_1.png')}}" alt="shape"></div>
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">Best Bulk Offering</h3>
                        <p class="text wow fadeInUp" data-wow-delay=".6s">
                            Pharmeceutical exchange plartform Pharmex
                        </p>
                        <div class="fancy-box-wrapper style1 wow fadeInUp" data-wow-delay=".8s">
                            <a class="theme-btn style1" href="{{url('/')}}/stock-exchange">View More</a>
                            <div class="item">
                                <h6>Drugs Exchange</h6>
                                <div class="counter">
                                    <span class="counter-number">400</span> <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section S T A R T -->
    <section class="service-section section-padding fix">
        <div class="service-container-wrapper style1">
            {{-- <div class="shape"><img src="{{asset('theme/assets/images/shape/serviceShape1_1.png')}}" alt="shape"></div> --}}
            <div class="shape"><img src="{{asset('theme/assets/images/shape/aboutShape1_1.png')}}" alt="shape"></div>
            <div class="container">
                <div class="section-title mxw-612">
                    <h6 class="subtitle wow fadeInUp" data-wow-delay=".3s">Why Choose Us</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay=".6s">Trusted and Reliable <span class="color-text">
                            Pharmaceutical Exchange Plartform </span></h2>
                </div>
                <div class="service-wrapper style1">
                    <div class="slider-area serviceSliderOne">
                        <div class="swiper gt-slider" id="serviceSliderOne"
                            data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-box-wrapper style1">
                                        <div class="service-box">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                    viewBox="0 0 50 50" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M20.1146 7.08345C21.8144 7.63608 23.4518 8.36504 25 9.25845C26.5482 8.36504 28.1855 7.63608 29.8854 7.08345C34.1437 5.73761 38.3854 5.9772 41.2042 8.79595C44.0229 11.6147 44.2625 15.8584 42.9167 20.1147C42.364 21.8146 41.6351 23.452 40.7417 25.0001C41.6917 26.673 42.4187 28.3126 42.9167 29.8855C44.2625 34.1418 44.0229 38.3855 41.2042 41.2043C38.3854 44.023 34.1417 44.2626 29.8854 42.9168C28.1855 42.3642 26.5482 41.6352 25 40.7418C23.4518 41.6352 21.8144 42.3642 20.1146 42.9168C15.8583 44.2605 11.6146 44.023 8.79583 41.2043C5.97708 38.3855 5.73958 34.1418 7.08333 29.8855C7.58125 28.3105 8.30833 26.673 9.25833 25.0001C8.36492 23.452 7.63596 21.8146 7.08333 20.1147C5.73958 15.8564 5.97916 11.6147 8.79583 8.79595C11.6146 5.9772 15.8583 5.73761 20.1146 7.08345ZM38.1042 28.9772C36.875 30.598 35.45 32.2272 33.8396 33.8397C32.3166 35.3684 30.692 36.7925 28.9771 38.1022C29.7257 38.4439 30.4472 38.7244 31.1417 38.9439C34.6792 40.0605 37.0083 39.5064 38.2583 38.2564C39.5083 37.0084 40.0625 34.6772 38.9458 31.1418C38.7104 30.4028 38.4293 29.6792 38.1042 28.9751V28.9772ZM11.8958 28.9772C11.5715 29.6807 11.2911 30.4036 11.0562 31.1418C9.93958 34.6793 10.4937 37.0084 11.7437 38.2584C12.9917 39.5084 15.3229 40.0605 18.8583 38.9439C19.5528 38.7244 20.275 38.4439 21.025 38.1022C19.31 36.7925 17.6855 35.3684 16.1625 33.8397C14.6331 32.3168 13.2062 30.6922 11.8958 28.9772ZM25 14.1668C22.888 15.6289 20.9157 17.2831 19.1083 19.1084C17.283 20.9158 15.6288 22.8881 14.1667 25.0001C15.6274 27.112 17.2803 29.0842 19.1042 30.8918C21.1104 32.898 23.0958 34.5376 25 35.8334C27.112 34.3714 29.0843 32.7171 30.8917 30.8918C32.7162 29.0843 34.3698 27.112 35.8312 25.0001C34.3734 22.8861 32.7203 20.9135 30.8937 19.1084C29.0857 17.283 27.1127 15.6288 25 14.1668ZM25 21.8751C25.8288 21.8751 26.6237 22.2044 27.2097 22.7904C27.7958 23.3765 28.125 24.1713 28.125 25.0001C28.125 25.8289 27.7958 26.6238 27.2097 27.2098C26.6237 27.7959 25.8288 28.1251 25 28.1251C24.1712 28.1251 23.3763 27.7959 22.7903 27.2098C22.2042 26.6238 21.875 25.8289 21.875 25.0001C21.875 24.1713 22.2042 23.3765 22.7903 22.7904C23.3763 22.2044 24.1712 21.8751 25 21.8751ZM11.7417 11.7418C10.4917 12.9918 9.93958 15.3209 11.0562 18.8584C11.2757 19.5529 11.5562 20.2751 11.8979 21.0251C13.1271 19.4001 14.55 17.773 16.1625 16.1605C17.6848 14.6319 19.3087 13.2078 21.0229 11.898C20.3195 11.573 19.5966 11.2919 18.8583 11.0564C15.3229 9.9397 12.9917 10.4939 11.7417 11.7418ZM31.1417 11.0564C30.4472 11.2758 29.7257 11.5564 28.9771 11.898C30.5979 13.1272 32.2271 14.5501 33.8396 16.1605C35.369 17.6835 36.7938 19.308 38.1042 21.023C38.4458 20.2744 38.7257 19.5529 38.9437 18.8584C40.0625 15.3209 39.5083 12.9918 38.2583 11.7418C37.0083 10.4918 34.6792 9.9397 31.1417 11.0564Z"
                                                        fill="#00A6ED" />
                                                </svg>
                                            </div>
                                            <h3><a href="#">Vetted Vendors</a></h3>
                                            <p class="text">
                                                GPT something here for the vetted vendors
                                            </p>
                                        </div>
                                        <div class="arrow-btn">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="24"
                                                    viewBox="0 0 52 24" fill="none">
                                                    <path
                                                        d="M51.0607 13.0607C51.6464 12.4749 51.6464 11.5251 51.0607 10.9393L41.5147 1.3934C40.9289 0.807611 39.9792 0.807611 39.3934 1.3934C38.8076 1.97919 38.8076 2.92893 39.3934 3.51472L47.8787 12L39.3934 20.4853C38.8076 21.0711 38.8076 22.0208 39.3934 22.6066C39.9792 23.1924 40.9289 23.1924 41.5147 22.6066L51.0607 13.0607ZM0 13.5H50V10.5H0V13.5Z"
                                                        fill="#2DCE98" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box-wrapper style1">
                                        <div class="service-box">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                    viewBox="0 0 50 50" fill="none">
                                                    <path
                                                        d="M16.6667 35.4167V31.2501H21.1979C21.0243 31.9445 20.9118 32.639 20.8604 33.3334C20.809 34.0279 20.8174 34.7223 20.8854 35.4167H16.6667ZM16.6667 45.8334C13.7847 45.8334 11.3285 44.8174 9.29791 42.7855C7.26736 40.7536 6.25138 38.2973 6.24999 35.4167V16.6667C5.10416 16.6667 4.12361 16.2591 3.30833 15.4438C2.49305 14.6286 2.08472 13.6473 2.08333 12.5001V8.33341C2.08333 7.18758 2.49166 6.20703 3.30833 5.39175C4.12499 4.57647 5.10555 4.16814 6.24999 4.16675H27.0833C28.2292 4.16675 29.2104 4.57508 30.0271 5.39175C30.8437 6.20841 31.2514 7.18897 31.25 8.33341V12.5001C31.25 13.6459 30.8424 14.6272 30.0271 15.4438C29.2118 16.2605 28.2305 16.6681 27.0833 16.6667V22.9688C26.25 23.4897 25.4861 24.0973 24.7917 24.7917C24.0972 25.4862 23.4896 26.2501 22.9687 27.0834H16.6667V22.9167H22.9167V16.6667H10.4167V35.4167C10.4167 37.1529 11.0243 38.6286 12.2396 39.8438C13.4549 41.0591 14.9305 41.6667 16.6667 41.6667C17.7083 41.6667 18.6549 41.4411 19.5062 40.9897C20.3576 40.5383 21.0778 39.9133 21.6667 39.1147C21.9444 39.8091 22.2569 40.4688 22.6042 41.0938C22.9514 41.7188 23.368 42.3265 23.8542 42.9167C22.9167 43.8195 21.8403 44.5313 20.625 45.0522C19.4097 45.573 18.0903 45.8334 16.6667 45.8334ZM6.24999 12.5001H27.0833V8.33341H6.24999V12.5001ZM34.375 39.5834C35.8333 39.5834 37.066 39.0799 38.0729 38.073C39.0799 37.0661 39.5833 35.8334 39.5833 34.3751C39.5833 32.9167 39.0799 31.6841 38.0729 30.6772C37.066 29.6702 35.8333 29.1667 34.375 29.1667C32.9167 29.1667 31.684 29.6702 30.6771 30.6772C29.6701 31.6841 29.1667 32.9167 29.1667 34.3751C29.1667 35.8334 29.6701 37.0661 30.6771 38.073C31.684 39.0799 32.9167 39.5834 34.375 39.5834ZM45 47.9167L39.375 42.2917C38.6111 42.7779 37.8125 43.1424 36.9792 43.3855C36.1458 43.6286 35.2778 43.7501 34.375 43.7501C31.7708 43.7501 29.5576 42.839 27.7354 41.0167C25.9132 39.1945 25.0014 36.9806 25 34.3751C24.9986 31.7695 25.9104 29.5563 27.7354 27.7355C29.5604 25.9147 31.7736 25.0029 34.375 25.0001C36.9764 24.9973 39.1903 25.9091 41.0167 27.7355C42.843 29.5619 43.7542 31.7751 43.75 34.3751C43.75 35.2779 43.6285 36.1459 43.3854 36.9792C43.1424 37.8126 42.7778 38.6112 42.2917 39.3751L47.9167 45.0001L45 47.9167Z"
                                                        fill="#1B3A57" />
                                                </svg>
                                            </div>
                                            <h3><a href="#">Unlimited Offers</a></h3>
                                            <p class="text">
                                                I am running out of things to write
                                            </p>
                                        </div>
                                        <div class="arrow-btn">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="24"
                                                    viewBox="0 0 52 24" fill="none">
                                                    <path
                                                        d="M51.0607 13.0607C51.6464 12.4749 51.6464 11.5251 51.0607 10.9393L41.5147 1.3934C40.9289 0.807611 39.9792 0.807611 39.3934 1.3934C38.8076 1.97919 38.8076 2.92893 39.3934 3.51472L47.8787 12L39.3934 20.4853C38.8076 21.0711 38.8076 22.0208 39.3934 22.6066C39.9792 23.1924 40.9289 23.1924 41.5147 22.6066L51.0607 13.0607ZM0 13.5H50V10.5H0V13.5Z"
                                                        fill="#2DCE98" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-box-wrapper style1">
                                        <div class="service-box">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                    viewBox="0 0 50 50" fill="none">
                                                    <path
                                                        d="M10.4167 43.75C8.64583 43.75 7.3875 42.9604 6.64166 41.3813C5.89583 39.8021 6.07777 38.3347 7.1875 36.9792L18.75 22.9167V10.4167H16.6667C16.0764 10.4167 15.5819 10.2167 15.1833 9.81667C14.7847 9.41667 14.5847 8.92222 14.5833 8.33333C14.5819 7.74444 14.7819 7.25 15.1833 6.85C15.5847 6.45 16.0792 6.25 16.6667 6.25H33.3333C33.9236 6.25 34.4187 6.45 34.8187 6.85C35.2187 7.25 35.4181 7.74444 35.4167 8.33333C35.4153 8.92222 35.2153 9.41736 34.8167 9.81875C34.4181 10.2201 33.9236 10.4194 33.3333 10.4167H31.25V22.9167L42.8125 36.9792C43.9236 38.3333 44.1062 39.8007 43.3604 41.3813C42.6146 42.9618 41.3556 43.7514 39.5833 43.75H10.4167ZM10.4167 39.5833H39.5833L27.0833 24.375V10.4167H22.9167V24.375L10.4167 39.5833Z"
                                                        fill="#00A6ED" />
                                                </svg>
                                            </div>
                                            <h3><a href="#">Free Delivery Services</a></h3>
                                            <p class="text">
                                                I am running out of things to write I am running out of things to write
                                            </p>
                                        </div>
                                        <div class="arrow-btn">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="24"
                                                    viewBox="0 0 52 24" fill="none">
                                                    <path
                                                        d="M51.0607 13.0607C51.6464 12.4749 51.6464 11.5251 51.0607 10.9393L41.5147 1.3934C40.9289 0.807611 39.9792 0.807611 39.3934 1.3934C38.8076 1.97919 38.8076 2.92893 39.3934 3.51472L47.8787 12L39.3934 20.4853C38.8076 21.0711 38.8076 22.0208 39.3934 22.6066C39.9792 23.1924 40.9289 23.1924 41.5147 22.6066L51.0607 13.0607ZM0 13.5H50V10.5H0V13.5Z"
                                                        fill="#2DCE98" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-button-wrapper">
                        <button data-slider-prev="#serviceSliderOne"
                            class="slider-arrow slider-prev d-lg-block d-none wow fadeInUp" data-wow-delay=".3s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16"
                                fill="none">
                                <path
                                    d="M0.292891 8.70711C-0.0976334 8.31658 -0.0976334 7.68342 0.292891 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292891 8.70711ZM31 9H0.999998V7H31V9Z"
                                    fill="#1B3A57" />
                            </svg>
                        </button>
                        <button data-slider-next="#serviceSliderOne"
                            class="slider-arrow style2 slider-next d-lg-block d-none wow fadeInUp" data-wow-delay=".6s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="16" viewBox="0 0 31 16"
                                fill="none">
                                <path
                                    d="M30.7071 8.70711C31.0976 8.31658 31.0976 7.68342 30.7071 7.29289L24.3431 0.928932C23.9526 0.538408 23.3195 0.538408 22.9289 0.928932C22.5384 1.31946 22.5384 1.95262 22.9289 2.34315L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.70711ZM0 9H30V7H0V9Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Brand Slider Section S T A R T -->
    <div class="brand-slider-section fix"><br><br>
        <div class="container">
            <div class="brand-slider-wrapper style1">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper gt-slider brandSlider1" id="brandSlider1"
                            data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_1.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_2.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_3.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_4.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_1.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_2.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_3.png')}}" alt="logo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="{{asset('theme/assets/images/brand/brandLogo1_4.png')}}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Section S T A R T -->
    <section class="video-section section-padding fix">
        <div class="container">
            <div class="video-wrapper style1">
                <div class="row">
                    <div class="col-12">
                        <div class="video-content" data-bg-src="{{asset('theme/assets/images/bg/videoBg1_1.jpg')}}">
                            <div class="video-subtitle wow fadeInUp" data-wow-delay=".3s">
                                WATCH VIDEO
                            </div>
                            <h2 class="video-title mxw-937 wow fadeInUp" data-wow-delay=".6s">Pharma and Biomedical
                                Case Studies</h2>
                        </div>
                        <?php
                          $Settings = DB::table('_site_settings')->get();
                        ?>
                        @foreach ($Settings as $sett)
                            <div class="video-box ripple-animation">
                                <a href="https://www.youtube.com/watch?v={{$sett->embede}}" class="play-btn popup-video"><i
                                        class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section two Start -->
    <footer class="footer-section-one" data-bg-src="{{asset('theme/assets/images/bg/footer-one-bg.png')}}">
        <div class="container">
            <div class="footer-contact-info">
                <div class="row g-4 d-flex align-items-center">
                    <div class="col-xl-6">
                        <div class="info-wrapper">
                            <div class="info"><a href="mailto:pharmex@mail.com">pharmex@mail.com</a></div>
                            <div class="info"><a href="tel:254723014032">(254) 723-014 032</a></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="social-links">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>Copyright © 2025 All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="{{asset('theme/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{asset('theme/assets/js/jquery.waypoints.js')}}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{asset('theme/assets/js/jquery.counterup.min.js')}}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{asset('theme/assets/js/viewport.jquery.js')}}"></script>
    <!--<< Tilt Js >>-->
    <script src="{{asset('theme/assets/js/tilt.min.js')}}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{asset('theme/assets/js/swiper-bundle.min.js')}}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{asset('theme/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!--<< Magnific popup Js >>-->
    <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
    <!--<< NIce Select Js >>-->
    <script src="{{asset('theme/assets/js/nice-select.min.js')}}"></script>
    <!--<< Main.js >>-->
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
</body>

</html>
