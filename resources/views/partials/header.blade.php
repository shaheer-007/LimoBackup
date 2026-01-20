<!--Start Main Header Three-->
<header class="main-header main-header-three">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-header-three__top">
                    <div class="container">
                        <div class="main-header-three__top-inner">

                            <div class="header-contact-style1">
                                <ul>
                                    <li>
                                        <a href="tel:{{ env('CALL') }}">
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><span>Talk to Us</span> <a style="color: #000000;"
                                                        href="{{ env('CALL') }}">{{ env('NUMBER') }}</a></p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="mailto:{{ env('EMAIL') }}">
                                            <div class="icon">
                                                <span class="icon-email"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><span>Mail Us</span> <a style="color: #000000;"
                                                        href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="main-header-three__right">
                                <div class="header-social-links">
                                    <a href="https://www.facebook.com/people/Yaz-Luxury-Transportation/61583407544573/" target="_blank"><span class="fab fa-facebook-f" style="color: #ffffff !important;"></span></a>
                                    <a href="https://www.linkedin.com/company/yaz-luxury-transportation/" target="_blank"><span class="fab fa-linkedin-in" style="color: #ffffff !important;"></span></a>
                                    <a href="https://www.youtube.com/@Yazluxurytransportation" target="_blank"><span class="fab fa-youtube" style="color: #ffffff !important;"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-header-three__bottom">
                    <div class="container">
                        <div class="main-header-three__bottom-inner">
                            <div class="main-header-three__bottom-left">
                                <div class="logo-box d-block d-xl-none">
                                    <a href="/"><img src="{{ asset('assets/images/resources/logo.svg') }}" alt=""></a>
                                </div>
                            </div>

                            <div class="main-header-three__bottom-middle">
                                <div class="main-header-three__menu">
                                    <div class="main-menu__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li>
                                                <a href="/">Home </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('book') }}">Book Online</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li class="logo-box d-none d-xl-block">
                                                <div style="width: 210px; height: auto;">
                                                    <a href="/"><img
                                                            src="{{ asset('assets/images/resources/logo.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ route('services') }}">Our Services</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('fleets') }}">Our Fleet</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('contact') }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--End Main Header Three-->

<div class="stricky-header stricky-header--style3 stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->