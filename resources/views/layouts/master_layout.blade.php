<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>My Website | Laravel</title>
        <meta content="" name="{{@$title}}">
        <meta content="" name="{{@$keyWord}}">

        <!-- Favicons -->
        <link href="{{asset('img/favicon.png')}}" rel="icon">
        <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: BizLand
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </section>

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/">Home</a></li>
                        <li><a class="nav-link scrollto" href="/about">About</a></li>
                        <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/services">All Services</a></li>
                                <li class="dropdown"><a href="/services/digitalmarketing" class="justify-content-start">
                                    <img src="{{asset('img/icons/social-media.png')}}" class="img-responsive me-2">
                                    <span>Digital Marketing</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="/services/webdevelopment" class="justify-content-start">
                                    <img src="{{asset('img/icons/code.png')}}" class="img-responsive me-2">
                                    Web Development</a></li>
                                <li><a href="/services/webdevelopment" class="justify-content-start">
                                    <img src="{{asset('img/icons/layers.png')}}" class="img-responsive me-2">
                                    Software Development</a>
                                </li>
                                <li><a href="/services/dataanalysis" class="justify-content-start">
                                        <img src="{{asset('img/icons/analytics.png')}}" class="img-responsive me-2">
                                        Data Analytics
                                    </a>
                                </li>
                                <li><a href="/services/collaboration" class="justify-content-start" title="Collaboration and Communication Services">
                                    <img src="{{asset('img/icons/collaboration.png')}}" class="img-responsive me-2">
                                    Collaboration Services</a>
                                </li>
                                <li><a href="/services/hardwareservices" class="justify-content-start">
                                    <img src="{{asset('img/icons/support.png')}}" class="img-responsive me-2">
                                    Hardware Services</a>
                                </li>
                                <li><a href="/services/eventsmanagement" class="justify-content-start">
                                    <img src="{{asset('img/icons/holidays-party.png')}}" class="img-responsive me-2">
                                    Party Events Management</a>
                                </li>
                                <li><a href="#" class="justify-content-start">
                                    <img src="{{asset('img/icons/graphic-design.png')}}" class="img-responsive me-2">
                                    Graphic Design</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <h1>Welcome to <span>BizLand</span></h1>
                <h2>We are team of talented designers making websites with Bootstrap</h2>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
        </section>
        <!-- End Hero -->
        <main id="main">
        @yield('body')
        </div>

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4>Newsletter</h4>
                            <p>To get more updates join our newsletter</p>
                            <form action="{{route('newsletter.store')}}" method="post">
                                @csrf
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>BizLand<span>.</span></h3>
                            <p>
                                A108 Adam Street <br>
                                New York, NY 535022<br>
                                United States <br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/services">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/services/webdevelopment">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/services/webdevelopment">Web Development</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/services/digitalmarketing">Graphic Design</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Social Networks</h4>
                            <p>Connect with us! Explore our social networks for updates, news, and engaging content. Stay connected, stay informed!</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('vendor/aos/aos.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
        <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('js/main.js')}}"></script>

        <script>
            const attributeName = 'click-to-scroll';
            const elements = document.querySelectorAll(`[${attributeName}]`);

            if (elements.length > 0) {
                console.log(`Number of elements with attribute ${attributeName}: ${elements.length}`);

                elements.forEach(element => {
                    element.addEventListener('click', function() {
                        const attributeValue = element.getAttribute(attributeName);
                        const section = document.getElementById(attributeValue);

                        if (section) {
                            window.scrollTo({
                                top: section.offsetTop,
                                block: 'start',
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            } else {
                console.log(`No elements found with attribute ${attributeName}`);
            }
        </script>
    </body>
</html>