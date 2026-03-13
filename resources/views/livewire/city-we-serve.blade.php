<div>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/cities.webp') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Cities</h2>
                <ul class="thm-breadcrumb">
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><span class="icon-right-arrow21"></span></li>
                    <li>Cities</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->
    <!--City we serve-->
    <section class="blog-three section-1">
        <div class="container">
            <div class="sec-title center text-center tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <div class="line"></div>
                    <div class="text tg-element-title">
                        <h4>Cities We Serve</h4>
                    </div>
                    <div class="icon">
                        <span class="icon-plane2 float-bob-x3"></span>
                    </div>
                </div>
                <h2 class="sec-title__title tg-element-title mb-4">Services <span>Coverage</span> Areas
                </h2>
            </div>

            <div class="row">
                <!--Start City Single - Miami-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/miami.webp') }}" alt="Miami">
                                <img src="{{ asset('assets/images/cities/miami.webp') }}" alt="Miami">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> Florida</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>Miami, <br> Florida</h2>
                            <p>Premium limousine service in Miami — airport transfers, corporate rides and special
                                events covered.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - New York-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/new-york.webp') }}" alt="New York">
                                <img src="{{ asset('assets/images/cities/new-york.webp') }}" alt="New York">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> New York</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>New York, <br> New York</h2>
                            <p>Luxury limousine service in New York City — seamless rides for business, events, and
                                airport transfers across all five boroughs.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - Fort Lauderdale-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/fort-lauderdale.webp') }}" alt="Fort Lauderdale">
                                <img src="{{ asset('assets/images/cities/fort-lauderdale.webp') }}" alt="Fort Lauderdale">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> Florida</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>Fort Lauderdale, <br> Florida</h2>
                            <p>Luxury limo service in Fort Lauderdale — reliable rides to FLL airport and beyond, day or
                                night.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - West Palm Beach-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/west-palm-beach.webp') }}" alt="West Palm Beach">
                                <img src="{{ asset('assets/images/cities/west-palm-beach.webp') }}" alt="West Palm Beach">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> Florida</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>West Palm Beach, <br> Florida</h2>
                            <p>Elegant limo service in West Palm Beach — perfect for corporate events, weddings, and
                                luxury airport transfers.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - San Diego-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/san-diego.webp') }}" alt="San Diego">
                                <img src="{{ asset('assets/images/cities/san-diego.webp') }}" alt="San Diego">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> California</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>San Diego, <br> California</h2>
                            <p>Premium limo service in San Diego — stylish rides for galas, airport pickups, and scenic
                                coastal tours.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - Los Angeles-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/los-angeles.webp') }}" alt="Los Angeles">
                                <img src="{{ asset('assets/images/cities/los-angeles.webp') }}" alt="Los Angeles">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> California</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>Los Angeles, <br> California</h2>
                            <p>First-class limousine service in Los Angeles — red carpet arrivals, LAX transfers, and
                                VIP transportation across the city.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - Orlando-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/orlando.webp') }}" alt="Orlando">
                                <img src="{{ asset('assets/images/cities/orlando.webp') }}" alt="Orlando">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> Florida</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>Orlando, <br> Florida</h2>
                            <p>Luxury limo service in Orlando — theme park transfers, convention rides, and elegant
                                transportation for any occasion.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->

                <!--Start City Single - Miami-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-three__single">
                        <div class="blog-three__single-img">
                            <div class="inner">
                                <img src="{{ asset('assets/images/cities/nashville.webp') }}" alt="Miami">
                                <img src="{{ asset('assets/images/cities/nashville.webp') }}" alt="Miami">
                            </div>
                        </div>

                        <div class="blog-three__single-content text-center">
                            <ul class="meta-box justify-content-center">
                                <li><i class="icon-location"></i> Tennessee</li>
                                <li class="bg2"><i class="icon-delivery-man"></i> 24/7 Service</li>
                            </ul>

                            <h2>Nashville, <br> Tennessee</h2>
                            <p>First-class limousine service in Nashville for weddings, corporate events, and BNA
                                airport transfers.</p>

                            <div class="d-flex gap-3 justify-content-center flex-nowrap mt-5">
                                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                                    Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>

                                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                    Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End City Single-->
            </div>
        </div>
    </section>
    <!--city we serve End-->
    <x-cta-section />
</div>