<div>
    <!--Start Cta One-->
    <section class="cta-one section-12">
        <div class="container">
            <div class="cta-one__inner cta-one__inner--custom">
                <div class="cta-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                        src="{{ asset('assets/images/cta/cta-section.webp') }}" alt=""></div>
                <div class="cta-one__content">
                    <h2>Experience The Peak Of <br> <span>Luxury</span> & Comfort</h2>
                  <p>Miami Luxury Limos delivers luxury transportation with professional<br>chauffeurs for a smooth and comfortable journey.</p>
                    <div class="d-flex gap-3 flex-nowrap mt-5">
                        <!-- Book Now – gold button, now thin -->
                        <a wire:navigate class="thm-btn thm-btn-thin" href="{{ route('book-now') }}"
                            style="font-size: 15px; padding: 8px 30px; border: 1px solid #e8b46f;">
                            Book Online
                            <!-- <i class="icon-right-arrow21"></i> -->
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>

                        <!-- Call Now – black button, now thin -->
                        <a class="thm-btn-reverse thm-btn-thin" href="tel:{{ env('CONTACT_NUMBER_TEL') }}"
                            style="font-size: 15px; padding: 8px 30px; border: 1px solid #e8b46f;">
                           Call Now
                            <!-- <i class="icon-right-arrow21"></i> -->
                            <span class="hover-btn hover-bx"></span>
                            <span class="hover-btn hover-bx2"></span>
                            <span class="hover-btn hover-bx3"></span>
                            <span class="hover-btn hover-bx4"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cta One-->
</div>