<!-- resources/views/layouts/website.blade.php -->

<html>

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Your Name" />
    <meta name="keywords" content="Your Name" />
    <meta name="generator" content="project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <meta name="title" content="Your Name">
    <meta name="description" content="Your Name">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:title" content="Your Name">
    <meta property="og:description" content="Your Name">
    <meta property="og:image" content="images/thumbs/1920x450.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://yourwebsite.com">
    <meta property="twitter:title" content="Your Name">
    <meta property="twitter:description" content="Your Name">
    <meta property="twitter:image" content="images/thumbs/1920x450.png">

    <!-- Zalo -->
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:image" content="images/thumbs/1920x450.png">
    <meta property="og:title" content="Your Name">
    <meta property="og:description" content="Your Name" />
    <meta name=""
        content="">


    {{-- <!-- Google Fonts -->

    <!-- CSS here -->

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    {{-- Fontawesome icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- Main style --}}
    <link rel="stylesheet" href="assets/scss/style.css">


    <link rel=”canonical” href="https://yourwebsite.com" />

    {{-- Slick Carousel --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

    {{-- Slick Carousel --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="icon" type="image/png" href="favicon.ico" />
</head>

<body>

    <div class="ajax-loading-block-window" style="display: none">
    </div>
    <div id="dialog-notifications-success" title="Notification" style="display:none;">
    </div>
    <div id="dialog-notifications-error" title="Error" style="display:none;">
    </div>
    <div id="dialog-notifications-warning" title="Warning" style="display:none;">
    </div>
    <div id="bar-notification" class="bar-notification-container" data-close="Close">
    </div>

    <style>
        .slider-area .slider>ul {
            z-index: 1;
        }

        .main-header .main-menu ul li a {
            font-size: 14px;
        }
    </style>

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="fas fa-phone"></i>Hotline : 000 000 00 00</li>
                                        <li><i class="far fa-envelope"></i>youremail@hotline.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right" style="display: flex;">
                                    <a href="online-medical" class="btn">Member Card</a>
                                    <a href="lien-he" class="btn">Contact</a>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="/" class="btn dropdown-toggle" data-toggle="dropdown"><img
                                                    src="assets/img/icon/user.png" />Login<span
                                                    class="caret"></span></a>
                                            <ul id="login-dp" class="dropdown-menu">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="booking" class="btn btn-green">Login</a>
                                                            <a href="register" class="btn btn-green">Register</a>
                                                            <div class="social-buttons">
                                                                <div>

                                                                </div>
                                                                <div>
                                                                    <a href="googleauthentication/login"
                                                                        class="btn btn-google"><i
                                                                            class="fa fa-facebook"></i> Login with<img
                                                                            src="assets/img/icon/google_white.png" /></a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="language-desktop">

                                        <style>
                                            .inline {
                                                display: inline;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-6 col-xs-6 header-left">
                                <a class="logo lg-display" href="/"><img src="assets/img/logo/Image_130x50.png"
                                        alt="logo"></a>
                                <div class="social-top"><span>Connect with us</span>
                                    <a target="_blank" href="https://www.facebook.com"><img class="icon"
                                            src="assets/img/icon/facebook.svg" alt="facebook" /></a>
                                    <a target="_blank" href="https://www.youtube.com"><img class="icon"
                                            src="assets/img/icon/youtube.svg" alt="youtube" /></a>
                                    <a target="_blank" href="https://zalo.me"><img class="icon"
                                            src="assets/img/icon/zalo.png" alt="youtube" /></a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-6 fl-right header-right">
                                <a href="online-medical" class="btn btn-green"><img
                                        src="assets/img/icon/useronline.svg" alt="online-user" />Online Medical</a>
                                <a href="booking" class="btn btn-blue"><img src="assets/img/icon/form.svg"
                                        alt="booking" />Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-mobile">
                    <a href="online-medical" class="green"><img src="assets/img/icon/useronline.svg"
                            alt="online-user" />Online Medical</a>
                    <a href="booking" class="blue"><img src="assets/img/icon/form.svg"
                            alt="booking" />Booking</a>
                    <ul class="dark-blue nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="/" class="btn dropdown-toggle" data-toggle="dropdown"><img
                                    src="assets/img/icon/user.png" />Login<span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="booking" class="btn btn-green">Login</a>
                                            <a href="register" class="btn btn-green">Register</a>
                                            <div class="social-buttons">
                                                <div>
                                                    <a href="booking" class="btn btn-fb"><i
                                                            class="fa fa-facebook"></i> Login with<img
                                                            src="assets/img/icon/f_white.png" /></a>
                                                </div>
                                                <div>
                                                    <a href="booking" class="btn btn-google"><i
                                                            class="fa fa-facebook"></i> Login with<img
                                                            src="assets/img/icon/google_white.png" /></a>
                                                </div>
                                            </div>

                                        </div><label class=>Specialist Name</label>

                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="icon_menu ">
                                <a class="logo lg-block" href="/"><img src="assets/img/logo/Image_130x50.png"
                                        alt="logo"></a>
                                <a href="/"><img class="img-fluid lg-display" src="assets/img/logo/44x44.png"
                                        alt="menu"></a>
                            </div>
                            <div class="">
                                <div class="menu-wrapper  d-flex align-items-center">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="uppercase" href="/">YOUR NAME</a>
                                                    <ul class="submenu">
                                                        <li><a class="capitalize" href='/about'>About us</a></li>
                                                        <li><a class="capitalize" href='/recruit'>Recruit</a></li>
                                                        <li><a class="capitalize" href='/contact'>Contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="uppercase" href="/">Faculty</a>
                                                    <ul class="submenu">
                                                        @for ($i = 0; $i <= 10; $i++)
                                                            <li><a class="capitalize"
                                                                    href='faculty-{{ $i }}'>Lorem Ipsum
                                                                    {{ $i }}</a></li>
                                                        @endfor
                                                    </ul>
                                                </li>
                                                <li><a class="uppercase" href='people'>Specialize</a></li>
                                                <li><a class="uppercase" href='services'>Services</a></li>
                                                <li><a class="uppercase" href='packages'>Packages</a></li>
                                                <li><a class="uppercase" href="/">FAQ</a>
                                                    <ul class="submenu">
                                                        <li><a class="capitalize" href='lorem-ipsum-1'>Lorem Ipsum
                                                                1</a></li>
                                                        <li><a class="capitalize" href='lorem-ipsum-1'>Lorem Ipsum
                                                                2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="uppercase" href='news'>News</a></li>
                                                <li class="language-mobile">


                                                    <style>
                                                        .inline {
                                                            display: inline;
                                                        }
                                                    </style>

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="search-box">
                                <!-- Search Box -->
                                <div class="search d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <div class="nav-search search-switch flex-auto">
                                                <span class="fas fa-search"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mobile Menu -->

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container-fluid">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mt30">
                                <a href="/"><img class="footer-logo" src="assets/img/logo/Image_130x50.png"
                                        alt="logo" /></a>
                                <div class="footer-info">
                                    <h1 style='text-transform: capitalize; color: white;'>Your Name</h1>
                                    <p style='line-height: 15px;'>Address: Your address
                                    <p>Phone:<b style='color: white;'> Your phone number</b></p>
                                    <p>Email:<b style='color: white;'> Your email</b></p>
                                    <p>Working time: </p>
                                    <p style='color: white;font-size: 14px;line-height: 15px;font-weight: 600;'> Your
                                        working time</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4  footer-list">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <ul>
                                    <li><a href="about">About YOUR NAME </a></li>
                                    <li><a href="people">Team</a></li>
                                    <li><a href="news">News</a></li>
                                    <li><a href="recruit">Recruitment</a></li>
                                    <li><a href="/">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4  footer-list">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <ul>
                                    <li><a href="/services">Service</a></li>
                                    <li><a href="/about">Introduction</a></li>
                                    <li><a href="/booking">Booking
                                        </a></li>
                                    <li><a href="packages">Booking Packages</a></li>
                                    <li><a href="quy-trình-khám-bệnh-dịch-vụ">Progress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-4 col-xs-12">
                        <div class="single-footer-caption">
                            <div class="footer-app">
                                <div class="app-ico">
                                    <h5>Download App</h5>
                                    <div>
                                        <img src="assets/img/icon/app-store.png" alt="" />
                                        <img src="assets/img/icon/google-play.png" alt="" />
                                    </div>
                                </div>

                                <div class="app-ico">
                                    <h5>Certificate :</h5>
                                    <div>
                                        <img src="assets/img/icon/red.png" alt="" />
                                        <img src="assets/img/icon/blue.png" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="link-chat-group">
            <a href="https://zalo.me" target="_blank">
                <img src="assets/img/icon/zalo-chat.png" alt="zalo-chat" />
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <img src="assets/img/messenger.png" alt="fb-chat" />
            </a>
        </div>

    </footer>

    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form" action="tin-tuc">
                <input type="text" id="search-input global-search" style="font-size: 20px;" name="Search"
                    placeholder='Search'>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/localstorage-slim"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.12/jquery.validate.unobtrusive.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    
    
    {{-- SLIDE BANNER HOMEPAGE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js"></script>


    <!-- Jquery Plugins, main Jquery -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('.items').slick({
                dots: true,
                infinite: true,
                speed: 800,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
        });

        function followLink(link) {
            if (link && link.includes('http')) {
                let a = document.createElement('a');
                a.target = '_blank';
                a.href = link;
                a.click();
                return
            }
            window.location.href = window.location.origin + "/" + link
        }
        setTimeout(() => {
            $('.pagination ul').css('display', 'flex')
        }, 1000);

        const sendEmail = () => {
            let email = $('#email').val()
            alert(
                "Gửi email thành công! Chúng tôi đã nhận được thông tin từ bạn và sẽ phản hồi trong thời gian sớm nhất!"
            )
            $.post(`/booking/sendemail?email=${email}`).then(x => {}).catch(err => {
                console.error(err)
            })

        }
    </script>
</body>

</html>
