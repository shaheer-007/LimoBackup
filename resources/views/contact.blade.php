@extends('main')
@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow21"></span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Contact Page-->
<section class="contact-page">
    <!--Start Contact Page Top-->
    <div class="contact-page__top">
        <div class="contact-page__top-pattern"
            style="background-image: url(assets/images/pattern/contact-page-top-pattern.png);"></div>
        <div class="container">
            <div class="row">
                <!--Start Contact Page Top Content-->
                <div class="col-xl-6">
                    <div class="contact-page__top-content">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <div class="line"></div>
                                <div class="text tg-element-title">
                                    <h4>Contact us</h4>
                                </div>
                                <div class="icon">
                                    <span class="icon-plane2 float-bob-x3"></span>
                                </div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Get in Touch And Let Us <br> Elevate Your
                                Experience
                            </h2>
                        </div>

                        <div class="contact-page__top-content-text1">
                            <p>Our dedicated team is here to assist you with every detail of your limousine
                                transportation needs. Whether you're planning a special event, arranging corporate
                                travel, or simply looking for a luxurious ride, we provide personalized support to
                                ensure a smooth and memorable experience from start to finish. </p>
                        </div>

                        <div class="social-links">
                            <a href="https://www.facebook.com/people/Yaz-Luxury-Transportation/61583407544573/"
                                target="_blank"><span class="fab fa-facebook-f"
                                    style="color: var(--thm-base) !important;"></span></a>
                            <a href="https://www.linkedin.com/company/yaz-luxury-transportation/" target="_blank"><span
                                    class="fab fa-linkedin-in" style="color: var(--thm-base) !important;"></span></a>
                            <a href="https://www.youtube.com/@Yazluxurytransportation" target="_blank"><span
                                    class="fab fa-youtube" style="color: var(--thm-base) !important;"></span></a>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Top Content-->

                <!--Start Contact Page Top Form-->
                <div class="col-xl-6">
                    <div class="contact-page__top-form">
                        <!-- Success/Error Message -->
                        @if(session('success') || session('error'))
                        <div id="messageBox"
                            style="margin-bottom: 20px; padding: 15px; border-radius: 4px; font-weight: 500;">
                        </div>
                        @endif

                        <form class="why-choose-one__form" action="{{ route('contact.send') }}"
                            method="post" novalidate="novalidate">
                            @csrf
                            <input type="text" name="honey_pot" style="display:none">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Name" required="">
                                        <div class="icon"><span class="icon-user"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" placeholder="Email" required="">
                                        <div class="icon"><span class="icon-email"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="number" placeholder="Phone" required="">
                                        <div class="icon"><span class="icon-phone2"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                        <div class="icon"><span class="icon-pen"></span></div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <div class="icon style2"><span class="icon-pen"></span></div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="why-choose-one__form-btn">
                                        <button type="submit" class="thm-btn">
                                            Submit Now
                                            <i class="icon-right-arrow21"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact Page Top Form-->
            </div>
        </div>
    </div>
    <!--End Contact Page Top-->

    <!--Start Contact Page Bottom-->
    <div class="contact-page__bottom">
        <div class="container">
            <div class="contact-page__bottom-inner">
                <ul class="list-unstyled">
                    <li class="contact-page__bottom-single">
                        <div class="icon">
                            <span class="icon-address"></span>
                        </div>
                        <div class="content">
                            <h2>Location</h2>
                            <p>2 International Plaza #214, Nashville, TN 37217, US</p>
                        </div>
                    </li>

                    <li class="contact-page__bottom-single">
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="content">
                            <h2>Email</h2>
                            <p>
                                <a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>
                            </p>
                        </div>
                    </li>

                    <li class="contact-page__bottom-single">
                        <div class="icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="content">
                            <h2>Phones</h2>
                            <p>
                                <a href="tel:{{ env('CALL') }}">{{ env('NUMBER') }}</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Contact Page Bottom-->
</section>
<!--End Contact Page-->

<!--Start Google Map One-->
<section class="google-map-one">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3222.6429380490736!2d-86.69785682360522!3d36.126555805381905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88646ed3ebbbf9f3%3A0x4c786d60a675940!2s2%20International%20Plaza%20%23214%2C%20Nashville%2C%20TN%2037217%2C%20USA!5e0!3m2!1sen!2s!4v1768586340513!5m2!1sen!2s"
        class="google-map-one__map"></iframe>
</section>
<!--End Google Map One-->

@endsection