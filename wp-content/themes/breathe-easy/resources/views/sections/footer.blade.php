@php
    $info = get_field('contact_info', 'option');
    $phone = $info['phone_number'];
    $whatsapp = $info['whatsapp_number'];
    $email = $info['email'];
    $working_days = $info['working_days'];
    $working_hours = $info['working_hours'];
    $closed_days = $info['closed_days'];

    $social = get_field('social_account', 'option');
    $facebook = $social['facebook'];
    $youtube = $social['youtube'];
    $instagram = $social['instagram'];
    $linkedin = $social['linkedin'];
@endphp

<section class="footer-social-widget bg-blue-light py-[25px]">
    <div class="container">
        <div class="social-widget-container flex justify-center">
            @if($facebook)
                <a class="mx-[1rem] md:mx-[2rem]" href="{{ $facebook }}"><i class="fa-brands fa-facebook text-[30px] md:text-[40px] text-blue-solid hover:text-blue-second"></i></a>
            @endif
            @if($youtube)
                <a class="mx-[1rem] md:mx-[2rem]" href="{{ $youtube }}"><i class="fa-brands fa-youtube text-[30px] md:text-[40px] text-blue-solid hover:text-blue-second"></i></a>
            @endif
            @if($instagram)
                <a class="mx-[1rem] md:mx-[2rem]" href="{{ $instagram }}"><i class="fa-brands fa-instagram text-[30px] md:text-[40px] text-blue-solid hover:text-blue-second"></i></a>
            @endif
            @if($linkedin)
                <a class="mx-[1rem] md:mx-[2rem]" href="{{ $linkedin }}"><i class="fa-brands fa-linkedin text-[30px] md:text-[40px] text-blue-solid hover:text-blue-second"></i></a>
            @endif
        </div>
    </div>
</section>
<footer class="bg-blue-second">
    <div class="footer-wrapper container py-8 lg:py-20">
        <div class="footer-top grid grid-cols-12 text-white gap-4">
            <div class="footer-nav-wrap col-span-12 sm:col-span-7 lg:col-span-5">
                <div class="footer-menu text-left">
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false]) !!}
                </div>
            </div>

            <div class="footer-cols col-span-12 sm:col-span-5 lg:col-span-3 working-hours">
                <h3 class="mb-4">Working Hours</h3>
                <div class="grid grid-cols-12">
                    <span class="block col-span-6 sm:col-span-12 mb-5 text-[25px] md:text-[30px] leading-[1.3]">
                        @if($working_days)
                            {{ $working_days }}<br />
                        @endif
                        @if($working_hours)
                            {{ $working_hours }}
                        @endif
                    </span>
                    <span class="block col-span-6 sm:col-span-12 text-[25px] md:text-[30px] leading-[1.3]">
                        @if($closed_days)
                            {{ $closed_days}}<br />
                            Closed
                        @endif
                    </span>
                </div>

                {{-- <h3 class="mt-8 mb-3">Follow US</h3>
                @if($facebook)
                    <a href="{{ $facebook }}"><i class="fa-brands fa-facebook hover:text-blue-light"></i></a>
                @endif
                @if($youtube)
                    <a href="{{ $youtube }}"><i class="fa-brands fa-youtube hover:text-blue-light"></i></a>
                @endif
                @if($instagram)
                    <a href="{{ $instagram }}"><i class="fa-brands fa-instagram hover:text-blue-light"></i></a>
                @endif
                @if($linkedin)
                    <a href="{{ $linkedin }}"><i class="fa-brands fa-linkedin hover:text-blue-light"></i></a>
                @endif --}}
            </div>

            <div class="footer-cols col-span-12 lg:col-span-4 contact-us order-first lg:order-last mb-10 lg:mb-0">
                <div class="contact-us-wrapper bg-blue-main p-8 rounded-2xl grid gap-y-1">
                    <h3 class="mb-8">Contact Us</h3>
                    <div class="grid gap-2
                    grid-rows-1 
                    sm:grid-rows-2">
                        <div><i class="fa-solid fa-phone-flip mr-3 w-8 text-[24px]"></i>
                            <span class="text-[25px] md:text-[30px] lg:text-[25px] xl:text-[30px] font-bold">{{ $phone }}</span>
                        </div>
                        <div><i class="fa-brands fa-whatsapp mr-3 w-8 text-[30px]"></i>
                            <span class="text-[25px] md:text-[30px] lg:text-[25px] xl:text-[30px] font-bold">{{ $whatsapp }}</span>
                        </div>
                        <div class="lg:mt-7 inline-flex items-center">
                            <i class="fa-regular fa-envelope mr-3 w-8 text-[30px]"></i>
                            <a href="mailto:{{ $email }}" class="ml-[8px] text-2xl lg:text-xl font-bold hover:text-blue-second">{{ $email }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom mt-14 grid gap-y-2">
            <div>
                <a class="header-logo justify-self-start" href="{{ home_url('/') }}">
                    <img class="header-logo-img w-[240px]"
                        src="{{ get_template_directory_uri() }}/resources/images/footer-logo.svg" />
                </a>
            </div>
            <div class="copyright-row grid grid-cols-12 border-t border-blue-main pt-2 text-sm font-medium">
                <div class="text-blue-main col-span-12 md:col-span-6">© Breathe-Easy HK Limited. {{ date('Y') }} All Rights Reserved
                </div>
                <div class="footer-links col-span-6 md:col-span-6 text-left md:text-right mt-[15px] md:mt-[0]">
                    {!! wp_nav_menu(['theme_location' => 'footer_quick_links', 'echo' => false]) !!}
                </div>

            </div>
        </div>
</footer>
