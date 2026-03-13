<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Miami Luxury Limousine</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/resources/miami-luxury.svg') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/images/resources/miami-luxury.svg') }}" />
    <link rel="manifest" href="{{ asset('assets/images/resources/miami-luxury.svg') }}" />
    <meta name="description" content="Miami Luxury Limousine" />
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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/06-blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/08-contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/09-counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/12-footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/13-page-header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/cta.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/feature.css') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    @livewireStyles
</head>
<body>
    <script>
        if (window.navigated) {
            var style = document.createElement('style');
            style.innerHTML = '.loader-wrap { display: none !important; }';
            document.head.appendChild(style);
        }
        window.navigated = true;
    </script>

    <!-- Floating Contact Buttons -->
    <div class="floating-contact-btns">
        <a href="tel:{{ env('CONTACT_NUMBER_TEL') }}" class="float-phone-btn" aria-label="Call Now">
            <i class="fa fa-phone"></i>
        </a>
        <a wire:navigate class="thm-btn thm-btn-thin" href="{{ route('book-now') }}"
            style="font-size: 14px; padding: 10px 30px;">
            Quote/Booking
            <span class="hover-btn hover-bx"></span>
            <span class="hover-btn hover-bx2"></span>
            <span class="hover-btn hover-bx3"></span>
            <span class="hover-btn hover-bx4"></span>
        </a>
    </div>

    <!-- Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="M" class="letters-loading"> M </span>
                        <span data-text-preloader="i" class="letters-loading"> i </span>
                        <span data-text-preloader="a" class="letters-loading"> a </span>
                        <span data-text-preloader="m" class="letters-loading"> m </span>
                        <span data-text-preloader="i" class="letters-loading"> i </span>
                        <span data-text-preloader="&nbsp;" class="letters-loading"> &nbsp; </span>
                        <span data-text-preloader="L" class="letters-loading"> L </span>
                        <span data-text-preloader="u" class="letters-loading"> u </span>
                        <span data-text-preloader="x" class="letters-loading"> x </span>
                        <span data-text-preloader="u" class="letters-loading"> u </span>
                        <span data-text-preloader="r" class="letters-loading"> r </span>
                        <span data-text-preloader="y" class="letters-loading"> y </span>
                        <span data-text-preloader="&nbsp;" class="letters-loading"> &nbsp; </span>
                        <span data-text-preloader="L" class="letters-loading"> L </span>
                        <span data-text-preloader="i" class="letters-loading"> i </span>
                        <span data-text-preloader="m" class="letters-loading"> m </span>
                        <span data-text-preloader="o" class="letters-loading"> o </span>
                        <span data-text-preloader="s" class="letters-loading"> s </span>

                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Preloader -->

    <div class="page-wrapper">
        <livewire:components.header />
        {{ $slot }}
        <livewire:components.footer /> 

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="/" aria-label="logo image"><img src="{{ asset('assets/images/resources/miami-luxury.svg') }}"
                            width="150" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">  
                    <li>
                        <i class="icon-phone"></i>
                        <a href="tel:{{ env('CONTACT_NUMBER_TEL') }}">{{ env('CONTACT_NUMBER') }}</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:{{ env('EMAIL_ADDRESS') }}">{{ env('EMAIL_ADDRESS') }}</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker-alt" style="font-size: 16px;"></i>
                        <a href="https://maps.app.goo.gl/Uu8igLc8p9rAFr6x6" target="_blank">{{ env('ADDRESS') }}</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="https://www.facebook.com/people/Yaz-Luxury-Transportation/61583407544573/" target="_blank" class="fab fa-facebook-square"></a>
                        <a href="https://www.linkedin.com/company/yaz-luxury-transportation/" target="_blank" class="fab fa-linkedin-in"></a>
                        <a href="https://www.youtube.com/@Yazluxurytransportation" target="_blank" class="fab fa-youtube"></a>
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
        <script>
            document.addEventListener('livewire:navigated', () => {
                const preloader = document.querySelector('.loader-wrap');
                if (preloader) {
                    preloader.style.display = 'none';
                }
            });
        </script>
        @livewireScripts
</body>

</html>