<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Midstrom Ridge - @yield('title', 'Study Abroad')</title>
    <meta name="description" content="@yield('seo.description', View::make('includes.head.description'))">
    <meta name="keywords" content="@yield('seo.keywords', View::make('includes.head.keywords'))">
    <meta name="author" content="Acclio Creative Solutions (https://www.acclio.com)">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/accordian.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600;800&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
</head>

<body>
    <nav id="navbar" class="navbar fixed-top navbar-expand-xl navbar-header navbar-mobile">
        <div class="navbar-container container">
            <div class="navbar-brand">
                <a class="navbar-brand-logo logo" href="#top">
                    <img src="assets/images/logo.png">
                </a>
                <a class="navbar-brand-logo logo-scroll" href="#top">
                    <img src="assets/images/logo.png">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#top">
                            <p class="nav-link-menu">Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#about">
                            <p class="nav-link-menu">About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#services">
                            <p class="nav-link-menu">Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#">
                            <p class="nav-link-menu">Blog</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">
                            <p class="nav-link-menu">FAQs</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <p class="nav-link-menu">Contact</p>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link learn-more-btn btn-extra-header" href="#contact">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link learn-more-btn" href="#contact">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="top"></div>
    <div class="wrapper">
        @yield('content')
        <!-- FOOTER -->
        <div class="footer-section">
            <div class="container footer-container">
                <!-- Footer Column 1 -->
                <div class="col-lg-5 footer-logo">
                    <img src="assets/images/logo-footer.png">
                    <p class="footer-subsection-text">Midstrom Ridge limited is an Overseas Education Expert with HQ in Nigeria. We have an impressive track record of successfully helping students study courses in various countries across the globe.</p>
                    <p class="footer-subsection-text mt-3">Our mission is to consistently re-invent ourselves to match every unique student’s expectation with superior services</p>
                </div>
                <!-- Footer Column 2 -->
                <div class="col-lg-4 footer-subsection">
                    <h3 class="footer-subsection-title">Contact</h3>
                    <ul class="footer-subsection-list">
                        <li> Dominion Plaza, Km 14, Lekki Epe Expressway, Igbo-Efon Bus stop. Lekki Lagos</li>
                        <li>.</li>
                        <li> Engineering Building, By Skye Bank, University College, Ibadan Oyo</li>

                    </ul>
                </div>
                <!-- Footer Column 3 -->
                <div class="col-lg-3 footer-subsection">
                    <h3 class="footer-subsection-title">Midstrom HQ</h3>
                    <ul class="footer-subsection-list">
                        <li> 2nd Floor, Yoma Place, 5 OP Fingesi Street,<br> Utako Abuja</li>
                        <li>.</li>
                        <li><a href="mailto:info@midstromridge.com">info@midstromridge.com</a></li>
                        <li><a href="tel:+2348034064434">+234 803 406 4434</a></li>
                    </ul>
                </div>
            </div>
            <div class="container footer-container footer-last">
                <!-- Footer Column 3 -->
                <div class="col-lg-5 footer-logo">
                    <div class="footer-social-media-icons-section">
                        <a href="#top" class="footer-social-media-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#top" class="footer-social-media-icon"><i class="fa fa-instagram"></i></a>
                        <a href="#top" class="footer-social-media-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#top" class="footer-social-media-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Footer Column 3 -->
                <div class="col-lg-4 footer-subsection">
                    <h3 class="footer-subsection-title">Services</h3>
                    <ul class="footer-subsection-list">
                        <li>Admission Processing</li>
                        <li>Visa Processing</li>
                        <li>Travel & Ticketing</li>
                        <li><a href="#services">+ MORE</a></li>
                    </ul>
                </div>
                <!-- Footer Column 3 -->
                <div id="legals"></div>
                <div class="col-lg-3 footer-subsection">
                    <h3 class="footer-subsection-title">Legal</h3>
                    <ul class="footer-subsection-list">
                        <li><a href="#legal">Privacy Policy</a></li>
                        <li><a href="#legal">Terms and Conditions</a></li>
                        <li><a href="#legal">Company Details</a></li>
                    </ul>
                </div>
                <!-- LEGAL MODALS -->
                <div id="legal" class="legal-modal">
                    <div>
                        <a href="#legals" title="Close" class="modal-close"></a>
                        <h1>Legal notice</h1>
                        <p><strong>Place your legal notice, terms or privacy policy in this section so your visitors can
                                view them without leaving the page.</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis interdum, suscipit
                            libero
                            non, pellentesque nisi. Duis eget varius quam, eget volutpat libero. Quisque sit amet
                            iaculis
                            lectus. Sed a consectetur erat, id condimentum nibh. Cras molestie dui vitae finibus
                            convallis.
                            Sed pharetra orci in commodo ultrices. Integer dui diam, sagittis a ipsum at, euismod
                            bibendum
                            odio. Phasellus blandit leo ut turpis sagittis accumsan. Proin facilisis nisi nec ex
                            suscipit
                            cursus. Nulla ac elit quam.</p>
                    </div>
                </div>
            </div>
            <!-- FOOTER CREDITS -->
            <div class="container footer-credits">
                <p>&copy; 2021 <a href="https://www.midstromridge.com" target="_blank"
                        title="Acclio">Midstrom Ridge</a>&trade;.
                    All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/accordian.js') }}"></script>
    <script src="{{ asset('assets/js/owl/owl.carousel.js') }}"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#navbar').addClass('header-scrolled');
            } else {
                $('#navbar').removeClass('header-scrolled');
            }
        });

    </script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 4,
                loop: true,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            });
        });

    </script>
</body>

</html>
