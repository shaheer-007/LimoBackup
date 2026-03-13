<div>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/our-services.webp') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Our Services</h2>
                <ul class="thm-breadcrumb">
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><span class="icon-right-arrow21"></span></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Service Two-->
    <section class="service-two section-1">
        <div class="container">
            <div class="sec-title center text-center tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <div class="line"></div>
                    <div class="text tg-element-title">
                        <h4>Our Services</h4>
                    </div>
                    <div class="icon">
                        <span class="icon-plane2 float-bob-x3"></span>
                    </div>
                </div>
                <h2 class="sec-title__title tg-element-title mb-4">Luxury Transportation Services
                    <br> For Every <span>Occasion</span>
                </h2>
            </div>

            <div class="row">
                <!--Start Service Two Single - Airport Transportation-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/airport.webp') }}" alt="Airport Transportation">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/airport-transfer.svg') }}" alt="Airport Transfer">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Airport Transfer</a></h2>
                                <p>Reliable airport transfer service providing timely pickups, professional chauffeurs,
                                    and comfortable luxury vehicles for a smooth start or end to your trip.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->

                <!--Start Service Two Single - Meetings & Events-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/hourly.webp') }}" alt="Meetings & Events">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/hourly-limo.svg') }}" alt="Hourly Limo Service">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Hourly Limo Service</a></h2>
                                <p>Our hourly limo service offers flexible luxury transportation allowing you to travel
                                    comfortably and conveniently for events or city tours.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->

                <!--Start Service Two Single - Corporate Transportation-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/corporate.webp') }}" alt="Corporate Transportation">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/corporate-transportation.svg') }}" alt="Corporate Transportation">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Corporate Transportation</a></h2>
                                <p>Professional corporate transportation for business travelers providing punctual
                                    service, comfortable vehicles, and a smooth ride to meetings.</p>

                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->

                <!--Start Service Two Single - Private Transportation-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/cruise.webp') }}" alt="Private Transportation">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/cruise-port-transfers.svg') }}" alt="Cruise Port Transfers">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Cruise Port Transfers</a></h2>
                                <p>Start your cruise journey smoothly with reliable port transfers offering timely
                                    pickups, luxury vehicles, and stress-free transportation.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->

                <!--Start Service Two Single - Hourly Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/group.webp') }}" alt="Hourly Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/group-transportation.svg') }}" alt="Group Transportation">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Group Transportation</a></h2>
                                <p>Our group transportation service provides spacious vehicles and professional
                                    chauffeurs ensuring safe, comfortable, and convenient travel for groups.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->

                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/event.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/event-special.svg') }}" alt="Event & Special Occasion">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Event & Special Occasion Limo Service</a></h2>
                                <p>Travel in luxury for special occasions with our premium limo service delivering
                                    elegance, comfort, and dependable transportation for every event.</p>

                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->
                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/prom-night.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/prom-night.svg') }}" alt="Prom Night">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Prom Night</a></h2>
                                <p>Make prom night unforgettable with a stylish limousine ride that offers safety,
                                    comfort, and a glamorous arrival for a memorable celebration.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->
                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/leisure.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/leisure-transportation.svg') }}" alt="Leisure Transportation">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Leisure Transportation</a></h2>
                                <p>Enjoy relaxing rides for your leisure trips with premium vehicles and professional
                                    chauffeurs ready to provide comfort and dependable transportation.</p>

                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->
                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/party-bus.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/party-bus.svg') }}" alt="Party Bus Service">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Party Bus Service</a></h2>
                                <p>Celebrate with friends in our fully equipped party bus featuring spacious seating,
                                    vibrant lighting, and an exciting atmosphere for unforgettable travel.</p>

                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->
                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/sporting-events.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/sporting-events.svg') }}" alt="Sporting Events">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>Sporting Events</a></h2>
                                <p>Arrive at your favorite sporting events in style with our luxury transportation
                                    service ensuring comfort, punctual arrivals, and a premium ride experience.</p>

                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Start Service Two Single - Daily Service-->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="service-two__single">
                        <div class="service-two__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/services/fifa.webp') }}" alt="Daily Service">
                            </div>
                        </div>

                        <div class="service-two__single-content">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services-icons/fifa-world-cup.svg') }}" alt="FIFA World Cup 2026">
                            </div>
                            <div class="service-two__single-content-inner text-center">
                                <h2><a>FIFA World Cup 2026</a></h2>
                                <p>Enjoy seamless transportation for FIFA World Cup 2026 with luxury vehicles,
                                    professional chauffeurs, and on-time service for a smooth ride to every match.</p>
                                <div class="btn-box">
                                    <a wire:navigate href="{{ route('book-now') }}">Book Online <span
                                            class="icon-right-arrow21"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Two Single-->
            </div>
        </div>
    </section>
    <!--End Service Two-->
    <x-cta-section />
</div>