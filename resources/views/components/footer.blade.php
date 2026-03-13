<div>
    <!--Start Footer Two-->
    <footer class="footer-one footer-one--two">
        <!-- <div class="footer-one__pattern">
            <img src="assets/images/pattern/footer-v1-pattern.png" alt="#">
        </div> -->
        <div class="footer-one__top">
            <div class="container">
                <div class="footer-one__top-inner">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__single footer-one__about">
                                <div class="footer-one__about-logo">
                                    <a href="/"><img src="{{ asset('assets/images/resources/miami-luxury.svg') }}" alt=""></a>
                                </div>
                                <p class="footer-one__about-text">Luxury Limo Services offers premium limousine services in
                                    Miami, delivering comfort, elegance, and reliability for every occasion.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__single footer-one__quick-links">
                                <div class="title">
                                    <h2>Quick Links <span class="icon-plane3"></span></h2>
                                </div>
                                <ul class="footer-one__quick-links-list">
                                    <li><a wire:navigate href="/"><span class="icon-right-arrow1"></span> Home</a></li>
                                    <li><a wire:navigate href="{{ route('book-now') }}"><span
                                                class="icon-right-arrow1"></span> Book
                                            Online</a>
                                    </li>
                                    <li><a wire:navigate href="{{ route('cities-we-serve') }}"><span
                                                class="icon-right-arrow1"></span> Cities
                                            Served</a>
                                    </li>
                                    <li><a wire:navigate href="{{ route('about-us') }}"><span
                                                class="icon-right-arrow1"></span> About
                                            Us</a>
                                    </li>
                                    <li><a wire:navigate href="{{ route('our-services') }}"><span
                                                class="icon-right-arrow1"></span> Our
                                            Services</a></li>
                                    <li><a wire:navigate href="{{ route('our-fleets') }}"><span
                                                class="icon-right-arrow1"></span> Our
                                            Fleet</a>
                                    </li>
                                    <li><a wire:navigate href="{{ route('contact-us') }}"><span
                                                class="icon-right-arrow1"></span> Contact
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
                                            <a href="tel:{{ env('CONTACT_NUMBER_TEL') }}">
                                                <div class="icon">
                                                    <span class="icon-phone"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>{{ env('CONTACT_NUMBER') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{ env('EMAIL_ADDRESS') }}">
                                                <div class="icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>{{ env('EMAIL_ADDRESS') }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://maps.app.goo.gl/Uu8igLc8p9rAFr6x6">
                                                <div class="icon">
                                                    <span class="icon-address"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>{{ env('ADDRESS') }}</p>
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
                                <p class="footer-one__subscribe-text mb-4">Stay connected with us on social media for
                                    the
                                    latest
                                    updates, blogs, and insights.</p>
                                <div class="footer-one__social-links">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="fab fa-youtube"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fab fa-linkedin"></span></a>
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
                    <div class="footer-one__bottom-text text-center">
                        <p class="text-center">© Copyright {{ date('Y') }} - Luxury Limo Services All Rights Reserved. A website by <a
                                href="https://bmgroupinc.com" target="_blank" style="color: #e8b470"><b
                                    style=" -webkit-background-clip: text;color: #e8b470 !important; text-decoration: none;">BM_IT</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer Two-->
</div>
