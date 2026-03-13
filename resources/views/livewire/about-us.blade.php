<div>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about-us.webp') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>About us</h2>
                <ul class="thm-breadcrumb">
                    <li><a wire:navigate href="/">Home</a></li>
                    <li><span class="icon-right-arrow21"></span></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start About Three-->
    <section class="about-three">
        <div class="container">
            <div class="row">
                <!-- Mobile Heading (Visible on Mobile/Tablet only) -->
                <div class="col-12 d-xl-none mb-30">
                    <div class="sec-title tg-heading-subheading animation-style2 text-center">
                        <div class="sec-title__tagline justify-content-center">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Who we are</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">Leading Luxury Limousine <br>
                            And Transport <span>Company</span>
                        </h2>
                    </div>
                </div>

                <!--Start About Three Img-->
                <div class="col-xl-6">
                    <div class="about-three__img">
                        <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/about-v2-shape2.webp') }}" alt="">
                        </div>
                        <div class="about-three__img-box">
                            <ul>
                                <li>
                                    <div class="img-box reveal">
                                        <img src="{{ asset('assets/images/about/about1.webp') }}" alt="">
                                    </div>
                                </li>

                                <li>
                                    <div class="about-three__experience-box">
                                        <div class="count-text-box count-box">
                                            <div class="count-number">
                                                <h3 class="count-text" data-stop="5" data-speed="1500">00</h3>
                                                <span class="plus">+</span>
                                            </div>
                                            <h4>Years of experience</h4>
                                        </div>
                                    </div>
                                    <div class="img-box reveal">
                                        <img src="{{ asset('assets/images/about/about2.webp') }}" alt="">
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End About Three Img-->

                <!--Start About Three Content-->
                <div class="col-xl-6">
                    <div class="about-three__content pt-xl-0">
                        <!-- Desktop Heading (Hidden on Mobile/Tablet) -->
                        <div class="sec-title tg-heading-subheading animation-style2 mb-30 d-none d-xl-block">
                            <div class="sec-title__tagline">
                                <div class="line"></div>
                                <div class="text tg-element-title">
                                    <h4>Who we are</h4>
                                </div>
                                <div class="icon">
                                    <span class="icon-plane2 float-bob-x3"></span>
                                </div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Leading Luxury Limousine <br>
                                And Transport <span>Company</span>
                            </h2>
                        </div>

                        <div class="about-three__content-text text-center text-xl-start">
                            <p>
                                Luxury Limo Services is your trusted name in premium transportation. We specialize in
                                creating elegant, comfortable, and reliable rides for every occasion whether it’s a
                                wedding,
                                corporate event, or a night out in the city. Our mission is to make every journey
                                unforgettable.
                            </p>
                        </div>

                        <div class="about-three__content-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services-icons/event-special.svg') }}" alt="Event Transportation">
                                    </div>

                                    <div class="content-box">
                                        <h2>Event Transportation</h2>
                                        <p>Arrive in style at weddings, parties, and special occasions with our luxury
                                            fleet
                                            and professional chauffeurs.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services-icons/corporate-transportation.svg') }}" alt="Corporate Travel">
                                    </div>

                                    <div class="content-box">
                                        <h2>Corporate Travel</h2>
                                        <p>We provide punctual, discreet, and comfortable rides for business meetings,
                                            conferences, and executive travel.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex gap-3 justify-content-center justify-content-xl-start">
                            <div class="about-three__content-btn">
                                <a wire:navigate class="thm-btn thm-btn-thin" href="{{ route('book-now') }}">Book Online
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                            <div class="about-three__content-btn">
                                <a class="thm-btn-reverse thm-btn-thin" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">Call Now
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About Three Content-->
            </div>
        </div>
    </section>
    <!--End About Three-->

    <!--Start Counter One-->
    <section class="counter-one">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sec-title__tagline justify-content-center">
                    <div class="line"></div>
                    <div class="text">
                        <h4 class="m-0">Our Milestones <span class="icon-plane2 float-bob-x3"></span></h4>
                    </div>
                </div>
                <h2 class="sec-title__title tg-element-title">Numbers That Define <span>Our Excellence</span></h2>
                <div class="sec-title__text">
                    <p>With years of dedicated service in the Miami luxury transportation industry, we have built a reputation <br> for reliability, comfort, and professional chauffeuring. Explore our achievements <br> that drive our commitment to your journey.</p>
                </div>
            </div>
            <div class="row">
                <!--Start Counter One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single">
                        <div class="counter-one__single-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/counter-icons/fleets.svg') }}" alt="Fleet">
                            </div>

                            <div class="content-box">
                                <div class="count-text-box count-box">
                                    <h3 class="count-text" data-stop="25" data-speed="1500">00</h3>
                                    <span class="plus">+</span>
                                </div>
                                <div class="text-box">
                                    <p>Fleet</p>
                                </div>
                            </div>
                        </div>
                        <div class="shape1"></div>
                    </div>
                </div>
                <!--End Counter One Single-->

                <!--Start Counter One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single">
                        <div class="counter-one__single-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/counter-icons/customers.svg') }}" alt="Happy Customers">
                            </div>

                            <div class="content-box">
                                <div class="count-text-box count-box">
                                    <h3 class="count-text" data-stop="500" data-speed="1500">00</h3>
                                    <span class="plus">+</span>
                                </div>
                                <div class="text-box">
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="shape1"></div>
                    </div>
                </div>
                <!--End Counter One Single-->

                <!--Start Counter One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-one__single">
                        <div class="counter-one__single-inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/counter-icons/experience.svg') }}" alt="Years Of Experience">
                            </div>

                            <div class="content-box">
                                <div class="count-text-box count-box">
                                    <h3 class="count-text" data-stop="5" data-speed="1500">00</h3>
                                    <span class="plus">+</span>
                                </div>
                                <div class="text-box">
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="shape1"></div>
                    </div>
                </div>
                <!--End Counter One Single-->
            </div>
        </div>
    </section>
    <!--End Counter One-->

    <!--Start About Two-->
    <section class="about-two">
        <div class="shape5"><img src="{{ asset('assets/images/shapes/about-v2-shape5.webp') }}" alt=""></div>
        <div class="container">
            <div class="row flex-xl-row-reverse">
                <!-- Mobile Heading (Visible on Mobile/Tablet only) -->
                <div class="col-12 d-xl-none mb-30">
                    <div class="sec-title tg-heading-subheading animation-style2 text-center">
                        <div class="sec-title__tagline justify-content-center">
                            <div class="line"></div>
                            <div class="text tg-element-title">
                                <h4>Why Choose Us</h4>
                            </div>
                            <div class="icon">
                                <span class="icon-plane2 float-bob-x3"></span>
                            </div>
                        </div>
                        <h2 class="sec-title__title tg-element-title">Redefining Elegance in <br> Every
                            <span>Ride</span>
                        </h2>
                    </div>
                </div>

                <!--Start About Two Img-->
                <div class="col-xl-6">
                    <div class="about-two__img">
                        <div class="shape2 float-bob-x"><img src="{{ asset('assets/images/shapes/about-v2-shape2.webp') }}" alt="">
                        </div>
                        <div class="shape3 float-bob-y"><img src="{{ asset('assets/images/shapes/about-v2-shape3.webp') }}" alt="">
                        </div>
                        <div class="shape4 float-bob-y"><img src="{{ asset('assets/images/shapes/about-v2-shape4.webp') }}" alt="">
                        </div>
                        <div class="about-two__img1">
                            <div class="inner reveal">
                                <img src="{{ asset('assets/images/about/redefining-elegance-1.webp') }}" alt="">
                            </div>
                            <div class="about-two__counter">
                                <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v2-shape1.webp') }}" alt="">
                                </div>
                                <div class="count-text-box count-box">
                                    <h2 class="count-text" data-stop="5" data-speed="1500">00</h2>
                                    <span class="plus">+</span>
                                </div>

                                <p>Years Of <br>
                                    Experience</p>
                            </div>
                        </div>

                        <div class="about-two__img2 reveal">
                            <img src="{{ asset('assets/images/about/redefining-elegance.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <!--End About Two Img-->

                <!--Start About Two Content-->
                <div class="col-xl-6">
                    <div class="about-two__content pt-xl-0 text-center text-xl-start">
                        <!-- Desktop Heading (Hidden on Mobile/Tablet) -->
                        <div class="sec-title tg-heading-subheading animation-style2 mb-0 d-none d-xl-block">
                            <div class="sec-title__tagline justify-content-xl-start">
                                <div class="line"></div>
                                <div class="text tg-element-title">
                                    <h4>Why Choose Us</h4>
                                </div>
                                <div class="icon">
                                    <span class="icon-plane2 float-bob-x3"></span>
                                </div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Redefining Elegance in <br> Every
                                <span>Ride</span>
                            </h2>
                        </div>
                        <div class="about-two__content-text1">
                            <p>At Luxury Limo Services, we go beyond transportation we deliver trust, efficiency, and
                                professional care at every mile. Here’s why businesses rely on us:</p>
                        </div>

                        <div class="about-two__content-text2">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul class="about-two__content-text2-list">
                                        <li>
                                            <p><span class="icon-check1"></span> Premium Fleet of Limousines</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-check1"></span> Professional Chauffeurs</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul class="about-two__content-text2-list">
                                        <li>
                                            <p><span class="icon-check1"></span> Customized Services</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-check1"></span> Unmatched Comfort & Privacy</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-xl-start mt-5">
                            <a wire:navigate class="thm-btn thm-btn-thin" href="{{ route('book-now') }}"
                                style="font-size: 15px; padding: 8px 30px;">
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
        </div>
    </section>
    <!--End About Two-->

    <!--Start Limos Pickup CTA-->
    <section class="limos-pickup-cta"
        style="background-image: url({{ asset('assets/images/about/luxury-limo-pick.webp') }});">
        <div class="limos-pickup-cta__overlay"></div>
        <div class="container">

            <div class="sec-title center text-center mb-25">
                <div class="sec-title__tagline">
                    <div class="line"></div>
                    <div class="text tg-element-title">
                        <h4>Premium Limousine Service</h4>
                    </div>
                    <div class="icon">
                        <span class="icon-plane2 float-bob-x3"></span>
                    </div>
                </div>
            </div>

            <h2 class="limos-pickup-cta__title">
                LUXURY LIMO <span>PICKUP</span></h2>

            <p class="limos-pickup-cta__text">
                Experience world-class limousine service tailored to your needs. Whether you need an airport transfer,
                corporate ride, or special event transportation — our professional chauffeurs are available 24/7 to
                deliver a safe, punctual, and truly luxurious experience every time.
            </p>

            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <!-- Book Online – gold button, now thin -->
                <a wire:navigate class="thm-btn thm-btn-thin thm-btn-thin--small" href="{{ route('book-now') }}">
                    Book Online
                    <!-- <i class="icon-right-arrow21"></i> -->
                    <span class="hover-btn hover-bx"></span>
                    <span class="hover-btn hover-bx2"></span>
                    <span class="hover-btn hover-bx3"></span>
                    <span class="hover-btn hover-bx4"></span>
                </a>

                <!-- Call Now – black button, now thin -->
                <a class="thm-btn-reverse thm-btn-thin thm-btn-thin--small" href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                    Call Now
                    <!-- <i class="icon-right-arrow21"></i> -->
                    <span class="hover-btn hover-bx"></span>
                    <span class="hover-btn hover-bx2"></span>
                    <span class="hover-btn hover-bx3"></span>
                    <span class="hover-btn hover-bx4"></span>
                </a>
            </div>

        </div>
    </section>
    <!--End Limos Pickup CTA-->

    <!--Start Testimonial Two-->
    <section class="testimonial-two">
        <div class="container clearfix">
            <div class="row">
                <!--Start Testimonial Two Content-->
                <div class="col-xl-4">
                    <div class="testimonial-two__content">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <div class="line"></div>
                                <div class="text tg-element-title">
                                    <h4>Client Testimonial</h4>
                                </div>
                                <div class="icon">
                                    <span class="icon-plane2 float-bob-x3"></span>
                                </div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Our Customers <br> <span>Reviews</span>
                            </h2>
                        </div>

                        <div class="testimonial-two__content-text">
                            <p>Discover why our clients trust Luxury Limo Services for their most important journeys.
                                Read our latest customer reviews below.</p>
                        </div>
                    </div>
                </div>
                <!--End Testimonial Two Content-->

                <!--Start Testimonial Two Right -->
                <div class="col-xl-8">
                    <div class="testimonial-two__right">
                        <div class="testimonial-two__carousel owl-carousel owl-theme owl-dot-style1">
                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            SM
                                        </div>

                                        <div class="title-box">
                                            <h2>Sarah Mitchell</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>Luxury Limo Services provided exceptional service for our wedding. The driver
                                            was professional, and the car was immaculate. They truly made our special
                                            day even more memorable.</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            DT
                                        </div>
                                        <div class="title-box">
                                            <h2>David Thompson</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>Reliable and punctual every time. I use them for all my corporate travel to
                                            and from the airport. The vehicles are always clean and the chauffeurs are
                                            very respectful.</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            ER
                                        </div>

                                        <div class="title-box">
                                            <h2>Emily Roberts</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>Best limo service in town! Friendly drivers, top-notch fleet, and always on
                                            time. I wouldn't trust anyone else with my transportation needs.</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            MB
                                        </div>
                                        <div class="title-box">
                                            <h2>Michael Brown</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>We rented a stretch limo for our daughter's prom, and they were amazing. They
                                            prioritized safety while still making the evening special for the kids.
                                            Highly recommend!</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            JW
                                        </div>

                                        <div class="title-box">
                                            <h2>Jessica Williams</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>Working with Luxury Limo Services is always a pleasure. They are
                                            professional, responsive, and their fleet is stunning. My clients are always
                                            impressed with their service.</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->

                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-top">
                                        <div class="name-box">
                                            RD
                                        </div>
                                        <div class="title-box">
                                            <h2>Robert Davis</h2>
                                            <span>Client</span>
                                        </div>
                                    </div>

                                    <div class="testimonial-two__single-text">
                                        <p>I had a great experience with Luxury Limo Services for an airport transfer.
                                            The chauffeur was waiting for me at the arrivals, and the ride was extremely
                                            comfortable after a long flight.</p>
                                    </div>

                                    <div class="rating-box">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->
                        </div>
                    </div>
                </div>
                <!--End Testimonial Two Right -->
            </div>
        </div>
    </section>
    <!--End Testimonial Two-->
    <x-cta-section />
</div>