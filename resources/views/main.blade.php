<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Three || Logistiq || Logistiq HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Logistiq HTML 5 Template " />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/01-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/02-animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/03-custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/05-flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/06-font-awesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/07-jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/08-jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/09-nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/11-owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/12-owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/13-jquery-ui.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/module-css/01-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/02-about.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/03-services.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/04-testimonial.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/05-team.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/06-blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/07-brand.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/08-contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/09-counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/10-error.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/11-faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/12-footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/13-page-header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/14-shop.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/15-video.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/awards.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/cta.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/design-interior.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/feature.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/pricing.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/projects.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/quote.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/skill.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/sliding-text.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/why-choose.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/working-process.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>

<body>

    <!-- Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="l" class="letters-loading"> l </span>
                        <span data-text-preloader="o" class="letters-loading"> o </span>
                        <span data-text-preloader="g" class="letters-loading"> g </span>
                        <span data-text-preloader="i" class="letters-loading"> i </span>
                        <span data-text-preloader="s" class="letters-loading"> s </span>
                        <span data-text-preloader="t" class="letters-loading"> t </span>
                        <span data-text-preloader="i" class="letters-loading"> i </span>
                        <span data-text-preloader="q" class="letters-loading"> q </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <div class="page-wrapper">

        @include('partials.header')
        @yield('content')
        @include('partials.footer')

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png"
                            width="150" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@logistiq.com">needhelp@logistiq.com</a>
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
            <span class="scroll-to-top__text"> Go Back Top</span>
        </a>

        <!-- For Js Library -->
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/wNumb.min.js') }}"></script>
        <script src="{{ asset('assets/js/curved-text/jquery.circleType.js') }}"></script>
        <script src="{{ asset('assets/js/curved-text/jquery.fittext.js') }}"></script>
        <script src="{{ asset('assets/js/curved-text/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('assets/js/gsap/gsap.js') }}"></script>
        <script src="{{ asset('assets/js/gsap/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('assets/js/gsap/SplitText.js') }}"></script>


        <script src="{{ asset('assets/js/01-bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/02-countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/03-jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/04-jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/05-jquery-sidebar-content.js') }}"></script>
        <script src="{{ asset('assets/js/06-marquee.min.js') }}"></script>
        <script src="{{ asset('assets/js/07-owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/08-jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/09-odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/10-jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/11-jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/12-wow.js') }}"></script>
        <script src="{{ asset('assets/js/13-isotope.js') }}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>