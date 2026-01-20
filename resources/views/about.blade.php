@extends('main')
@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>About us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
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
            <!--Start About Three Img-->
            <div class="col-xl-6">
                <div class="about-three__img">
                    <div class="shape1 float-bob-x"><img src="assets/images/shapes/about-v2-shape2.png" alt="">
                    </div>
                    <div class="about-three__img-box">
                        <ul>
                            <li>
                                <div class="img-box reveal">
                                    <img src="assets/images/about/about-v3-img1.jpg" alt="">
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
                                    <img src="assets/images/about/about-v3-img2.jpg" alt="">
                                </div>


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End About Three Img-->

            <!--Start About Three Content-->
            <div class="col-xl-6">
                <div class="about-three__content">
                    <div class="sec-title tg-heading-subheading animation-style2">
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

                    <div class="about-three__content-text">
                        <p>
                            Yaz Lamousine is Tennessee’s trusted name in premium transportation. We specialize in
                            creating elegant, comfortable, and reliable rides for every occasion whether it’s a wedding,
                            corporate event, or a night out in the city. Our mission is to make every journey
                            unforgettable.
                        </p>
                    </div>

                    <div class="about-three__content-list">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-global-services"></span>
                                </div>

                                <div class="content-box">
                                    <h2>Event Transportation</h2>
                                    <p>Arrive in style at weddings, parties, and special occasions with our luxury fleet
                                        and professional chauffeurs.</p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="icon-man"></span>
                                </div>

                                <div class="content-box">
                                    <h2>Corporate Travel</h2>
                                    <p>We provide punctual, discreet, and comfortable rides for business meetings,
                                        conferences, and executive travel.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="about-three__content-btn">
                            <a class="thm-btn" href="#">Book Online
                                <i class="icon-right-arrow21"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                        <div class="about-three__content-btn">
                            <a class="thm-btn-reverse" href="tel:{{ env('CALL') }}"> Call Now
                                <i class="icon-right-arrow21"></i>
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
        <div class="row">
            <!--Start Counter One Single-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="counter-one__single">
                    <div class="counter-one__single-inner">
                        <div class="icon">
                            <span class="icon-box"></span>
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
                            <span class="icon-location"></span>
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
                            <span class="icon-customer-loyalty"></span>
                        </div>

                        <div class="content-box">
                            <div class="count-text-box count-box">
                                <h3 class="count-text" data-stop="5" data-speed="1500">00</h3>
                                <span class="plus">+</span>
                            </div>
                            <div class="text-box">
                                <p>Years Of Expirence</p>
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
    <div class="shape5"><img src="assets/images/shapes/about-v2-shape5.png" alt=""></div>
    <div class="container">
        <div class="row flex-xl-row-reverse">
            <!--Start About Two Img-->
            <div class="col-xl-6">
                <div class="about-two__img">
                    <div class="shape2 float-bob-x"><img src="assets/images/shapes/about-v2-shape2.png" alt="">
                    </div>
                    <div class="shape3 float-bob-y"><img src="assets/images/shapes/about-v2-shape3.png" alt="">
                    </div>
                    <div class="shape4 float-bob-y"><img src="assets/images/shapes/about-v2-shape4.png" alt="">
                    </div>
                    <div class="about-two__img1">
                        <div class="inner reveal">
                            <img src="assets/images/about/about-v2-img1.jpg" alt="">
                        </div>
                        <div class="about-two__counter">
                            <div class="shape1"><img src="assets/images/shapes/about-v2-shape1.png" alt="">
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
                        <img src="assets/images/about/about-v2-img2.jpg" alt="">
                    </div>
                </div>
            </div>
            <!--End About Two Img-->

            <!--Start About Two Content-->
            <div class="col-xl-6">
                <div class="about-two__content">
                    <div class="sec-title tg-heading-subheading animation-style2">
                        <div class="sec-title__tagline">
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
                        <p>At Yaz Limousine, we go beyond transportation we deliver trust, efficiency, and
                            excellence. Here’s why businesses rely on us:</p>
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

                    <div class="d-flex gap-3">
                        <div class="about-three__content-btn">
                            <a class="thm-btn" href="#">Book Online
                                <i class="icon-right-arrow21"></i>
                                <span class="hover-btn hover-bx"></span>
                                <span class="hover-btn hover-bx2"></span>
                                <span class="hover-btn hover-bx3"></span>
                                <span class="hover-btn hover-bx4"></span>
                            </a>
                        </div>
                        <div class="about-three__content-btn">
                            <a class="thm-btn-reverse" href="tel:{{ env('CALL') }}"> Call Now
                                <i class="icon-right-arrow21"></i>
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
        <!--End About Two Content-->
    </div>
    </div>
</section>
<!--End About Two-->

<!--Start Testimonial Three-->
<section class="testimonial-three">
    <div class="container">
        <div class="sec-title center text-center tg-heading-subheading animation-style2">
            <div class="sec-title__tagline">
                <div class="line"></div>
                <div class="text tg-element-title">
                    <h4>testimonials</h4>
                </div>
                <div class="icon">
                    <span class="icon-plane2 float-bob-x3"></span>
                </div>
            </div>
            <h2 class="sec-title__title tg-element-title">What Client’s say about <br>
                Our <span>Services</span></h2>
        </div>

        <div class="testimonial-three__inner">
            <div class="testimonial-three__img1 float-bob-y3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img5.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__img2 float-bob-y3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img7.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__img3  float-bob-x3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img8.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__img4  float-bob-y3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img9.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__img5  float-bob-y3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img6.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__img6  float-bob-x3">
                <img src="{{ asset('assets/images/testimonial/testimonial-v3-img4.jpg') }}" alt="">
            </div>

            <div class="testimonial-three__carousel owl-carousel owl-theme">
                <!--Start Testimonial Three Single-->
                <div class="testimonial-three__single">

                    <div class="testimonial-three__single-title text-center">
                        <h2>We contracted with Nashville Limo for an entire evening moving 6 of us around three venues
                            in and around Nashville. The driver was very professional and courteous. They made a special
                            night during the Holidays even better. I highly recommend their service.</h2>
                    </div>

                    <div class="testimonial-three__single-author text-center">
                        <h2>Donald Rubright</h2>
                    </div>

                    <div class="testimonial-three__single-rating">
                        <div class="icon">
                            <span class="icon-star"></span>
                        </div>
                        <h4>5 out of 5</h4>
                    </div>

                </div>
                <!--End Testimonial Three Single-->

                <!--Start Testimonial Three Single-->
                <div class="testimonial-three__single">

                    <div class="testimonial-three__single-title text-center">
                        <h2>Benny was on time, friendly, helpful and great conversation on our way to the airport!!!
                            Will use Nashville Limo and specifically request Benny again on our next visit!</h2>
                    </div>

                    <div class="testimonial-three__single-author text-center">
                        <h2>Stephen Yosh</h2>
                    </div>

                    <div class="testimonial-three__single-rating">
                        <div class="icon">
                            <span class="icon-star"></span>
                        </div>
                        <h4>5 out of 5</h4>
                    </div>

                </div>
                <!--End Testimonial Three Single-->

                <!--Start Testimonial Three Single-->
                <div class="testimonial-three__single">

                    <div class="testimonial-three__single-title text-center">
                        <h2>Absolutely outstanding in every way. We had 3 separate reservations and all were perfect. He
                            communicated well, was on time, helpful, gave great local advice, vehicles were luxurious
                            and immaculate. The overall service was perfect. Highly recommend.</h2>
                    </div>

                    <div class="testimonial-three__single-author text-center">
                        <h2>Christopher Jones</h2>
                    </div>

                    <div class="testimonial-three__single-rating">
                        <div class="icon">
                            <span class="icon-star"></span>
                        </div>
                        <h4>5 out of 5</h4>
                    </div>

                </div>
                <!--End Testimonial Three Single-->

                <!--Start Testimonial Three Single-->
                <div class="testimonial-three__single">

                    <div class="testimonial-three__single-title text-center">
                        <h2>Nashville Limo Service provided top tier private transportation service. Pickup was easy,
                            smooth, and on time. The car was spacious and clean. The driver was friendly and super
                            helpful. I will book their services over and over again!</h2>
                    </div>

                    <div class="testimonial-three__single-author text-center">
                        <h2>Andrea Yelk</h2>
                    </div>

                    <div class="testimonial-three__single-rating">
                        <div class="icon">
                            <span class="icon-star"></span>
                        </div>
                        <h4>5 out of 5</h4>
                    </div>

                </div>
                <!--End Testimonial Three Single-->

                <!--Start Testimonial Three Single-->
                <div class="testimonial-three__single">

                    <div class="testimonial-three__single-title text-center">
                        <h2>Since my recent move to Nashville, Nash Limousine has been my go-to luxury transportation
                            service of choice when I travel, or have guests in town who need transportation. The team’s
                            world class customer service makes it easy to be a repeat customer.</h2>
                    </div>

                    <div class="testimonial-three__single-author text-center">
                        <h2>Kingsley Osakwe</h2>
                    </div>

                    <div class="testimonial-three__single-rating">
                        <div class="icon">
                            <span class="icon-star"></span>
                        </div>
                        <h4>5 out of 5</h4>
                    </div>

                </div>
                <!--End Testimonial Three Single-->
            </div>


        </div>
    </div>
</section>
<!--End Testimonial Three-->

@endsection