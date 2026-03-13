<div>
    <!--Start Main Header Three-->
    <header class="main-header main-header-three">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-header-three__top">
                        <div class="container">
                            <div class="main-header-three__top-inner">
                                <div class="header-contact-style1-custom">
                                    <ul class="custom-top-header">
                                        <li>
                                            <a href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                                <span class="icon-phone"></span>
                                                <span>{{ env('CONTACT_NUMBER') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{ env('EMAIL_ADDRESS') }}">
                                                <span class="icon-email"></span>
                                                <span>{{ env('EMAIL_ADDRESS') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://maps.app.goo.gl/Uu8igLc8p9rAFr6x6" target="_blank">
                                                <span class="icon-address"></span>
                                                <span>{{ env('ADDRESS') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="main-header-three__right">
                                    <div class="header-social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                        <a href="#"><span class="fab fa-youtube"></span></a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="main-header-three__bottom">
                        <div class="container">
                            <div class="main-header-three__bottom-inner">
                                <div class="main-header-three__bottom-left">
                                    <div class="logo-box d-block d-xl-none logo-box-mobile">
                                        <a href="/"><img src="{{ asset('assets/images/resources/miami-luxury.svg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="main-header-three__bottom-middle">
                                    <div class="main-header-three__menu">
                                        <div class="main-menu__main-menu-box">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <ul class="main-menu__list">
                                                <li class="{{ Request::is('/') ? 'current' : ''}}">
                                                    <a wire:navigate href="/">Home </a>
                                                </li>
                                                <li class="{{ Request::is('book-now') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('book-now') }}">Book Online</a>
                                                </li>
                                                <li class="{{ Request::is('about-us') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('about-us') }}">About Us</a>
                                                </li>
                                                <li class="{{ Request::is('cities-we-serve') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('cities-we-serve') }}">Cities</a>
                                                </li>
                                                <li class="logo-box d-none d-xl-block">
                                                    <div style="width: 100px; height: auto;">
                                                        <a href="/"><img
                                                                src="{{ asset('assets/images/resources/miami-luxury.svg') }}"
                                                                alt=""></a>
                                                    </div>
                                                </li>
                                                <li class="{{ Request::is('our-services') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('our-services') }}">Our Services</a>
                                                </li>

                                                <li class="{{ Request::is('our-fleets') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('our-fleets') }}">Our Fleet</a>
                                                </li>

                                                <li class="{{ Request::is('contact-us') ? 'current' : ''}}">
                                                    <a wire:navigate href="{{ route('contact-us') }}">Contact Us</a>
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
</div>