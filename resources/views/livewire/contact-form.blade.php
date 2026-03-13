<div>
    @if (session()->has('success'))
        <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="contact-form__form">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-form__input-box">
                    <input type="text" wire:model="name" placeholder="Your Name" name="name">
                    @error('name') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="contact-form__input-box">
                    <input type="email" wire:model="email" placeholder="Email Address" name="email">
                    @error('email') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-form__input-box">
                    <input type="tel" wire:model="phone" placeholder="Phone Number" name="phone" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="contact-form__input-box">
                    <input type="text" wire:model="subject" placeholder="Subject" name="subject">
                    @error('subject') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form__input-box">
                    <textarea wire:model="message" placeholder="Write a Message" name="message"></textarea>
                    @error('message') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form__btn-box">
                    <button type="submit" class="thm-btn contact-form__btn">
                        Send Message
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
