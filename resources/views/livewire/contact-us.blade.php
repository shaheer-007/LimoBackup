<div>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/contact-us.webp') }})">
        </div>
        <div class="page-header__pattern"><img src="assets/images/pattern/page-header-pattern.png" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
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
            <!-- <div class="contact-page__top-pattern"
                style="background-image: url(assets/images/pattern/contact-page-top-pattern.png);"></div> -->
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
                                <h2 class="sec-title__title tg-element-title">Get In Touch <br>
                                    Luxury is One <span>Call</span> Away
                                </h2>
                            </div>

                            <div class="contact-page__top-content-text1">
                                <p>Available 24/7 for all your luxury travel needs. Contact us today for a seamless booking experience.</p>
                            </div>

                            <div class="social-links">
                                <a href="#"><span class="icon-facebook-f"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Top Content-->

                    <!--Start Contact Page Top Form-->
                    <div class="col-xl-6">
                        <div class="contact-page__top-form">
                            <form class="contact-form-validated why-choose-one__form"
                                action="https://weblayout.mnsithub.com/html/logistiq/main-html/assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
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
                                            <input type="tel" name="Phone" placeholder="Phone" required="" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
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
                                                Submit
                                                <!-- <i class="icon-right-arrow21"></i> -->
                                                <span class="hover-btn hover-bx"></span>
                                                <span class="hover-btn hover-bx2"></span>
                                                <span class="hover-btn hover-bx3"></span>
                                                <span class="hover-btn hover-bx4"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
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
                            <a href="https://www.google.com/maps?q={{ urlencode(env('ADDRESS')) }}" target="_blank" class="d-block w-100">
                                <div class="icon">
                                    <span class="icon-address"></span>
                                </div>
                                <div class="content">
                                    <h2>Location</h2>
                                    <p>{{env('ADDRESS')}} </p>
                                </div>
                            </a>
                        </li>

                        <li class="contact-page__bottom-single">
                            <a>
                                <div class="icon">
                                    <span class="icon-clock2"></span>
                                </div>
                                <div class="content">
                                    <h2>Working Hours</h2>
                                    <p>24/7</p>
                                </div>
                            </a>
                        </li>
                        <li class="contact-page__bottom-single">
                            <a href="mailto:{{ env('EMAIL_ADDRESS') }}" class="d-block w-100">
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="content">
                                    <h2>Email</h2>
                                    <p>{{ env('EMAIL_ADDRESS') }}</p>
                                </div>
                            </a>
                        </li>

                        <li class="contact-page__bottom-single">
                            <a href="tel:{{ env('CONTACT_NUMBER_TEL') }}" class="d-block w-100">
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="content">
                                    <h2>Phones</h2>
                                    <p>{{ env('CONTACT_NUMBER') }}</p>
                                </div>
                            </a>
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53920094638!2d-80.30779439086315!3d25.782390793133107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1773277257317!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>