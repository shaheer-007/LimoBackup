<!--Start Footer Two-->
<footer class="footer-one footer-one--two">
    <div class="footer-one__pattern">
        <img src="assets/images/pattern/footer-v1-pattern.png" alt="#">
    </div>
    <div class="footer-one__top">
        <div class="container">

            <div class="footer-one--two__cta">
                <div class="shape1">
                    <img class="float-bob-x3" src="assets/images/shapes/footer-v2-shape2.png" alt="">
                </div>
                <div class="shape2">
                    <img class="float-bob-y" src="assets/images/shapes/footer-v2-shape1.png" alt="">
                </div>
                <div class="footer-one--two__cta-inner">
                    <div class="text-box">
                        <h2>Luxury, Comfort, & Reliable Limo Service!</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="#">Contact with Us
                            <i class="icon-right-arrow21"></i>
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-one__top-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__single footer-one__about">
                            <div class="footer-one__about-logo">
                                <a href="/"><img src="{{ asset('assets/images/resources/logo.svg') }}" alt=""></a>
                            </div>
                            <p class="footer-one__about-text">Yaz Lamousine offers premium limousine services in
                                Nashville, delivering comfort, elegance, and reliability for every occasion.</p>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__single footer-one__quick-links">
                            <div class="title">
                                <h2>Quick Links <span class="icon-plane3"></span></h2>
                            </div>

                            <ul class="footer-one__quick-links-list">
                                <li><a href="/"><span class="icon-right-arrow1"></span> Home</a></li>
                                <li><a href="{{ route('book') }}"><span class="icon-right-arrow1"></span> Book Online</a>
                                </li>
                                <li><a href="{{ route('about') }}"><span class="icon-right-arrow1"></span> About Us</a>
                                </li>
                                <li><a href="{{ route('services') }}"><span class="icon-right-arrow1"></span> Our
                                        Services</a></li>
                                <li><a href="{{ route('fleets') }}"><span class="icon-right-arrow1"></span> Our Fleet</a>
                                </li>
                                <li><a href="{{ route('contact') }}"><span class="icon-right-arrow1"></span> Contact
                                        Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__single footer-one__contact">
                            <div class="title">
                                <h2>Get In Touch <span class="icon-plane3"></span></h2>
                            </div>

                            <div class="footer-one__contact-box">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-address"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>
                                                2 International Plaza #214, Nashville, TN 37217, US
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="mailto:{{ env('EMAIL') }}">
                                            <div class="icon">
                                                <span class="icon-email"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>{{ env('EMAIL') }}</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="tel:{{ env('CALL') }}">
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>{{ env('NUMBER') }}</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__single footer-one__social">
                            <div class="title">
                                <h2>Follow Us <span class="icon-plane3"></span></h2>
                            </div>

                            <p class="footer-one__subscribe-text mb-4">Stay connected with us on social media for the
                                latest
                                updates, blogs, and insights.</p>

                            <div class="footer-one__social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/@Yazluxurytransportation" target="_blank"><span class="fab fa-youtube"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/people/Yaz-Luxury-Transportation/61583407544573/" target="_blank"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/yaznashvillelimo/" target="_blank"><span class="fab fa-linkedin"></span></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-one__bottom">
        <div class="container">

            <div class="footer-one__bottom-inner">
                <div class="footer-one__bottom-text">
                    <p>© Copyright {{ date('Y') }} - Yaz Limousine All Rights Reserved. A website by <a href="https://bmgroupinc.com" target="_blank" style="color: #e8b470"><b style=" -webkit-background-clip: text;color: #e8b470 !important; text-decoration: none;">BM_IT</b></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer Two-->