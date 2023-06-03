@php
    $info = get_field('contact_info', 'option');
    $phone = $info['phone_number'];
    $whatsapp = $info['whatsapp_number'];
    $email = $info['email'];
    
    $social = get_field('social_account', 'option');
    $facebook = $social['facebook'];
    $youtube = $social['youtube'];
    $instagram = $social['instagram'];
    $linkedin = $social['linkedin'];
@endphp

<footer class="bg-blue-second">
    <div class="footer-wrapper container py-8 xl:py-20">
        <div class="footer-top grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 text-white gap-4">
            <div class="footer-widget footer-cols widget-1">
                @php dynamic_sidebar('footer-widget-1') @endphp
            </div>

            <div class="footer-widget footer-cols widget-2">
                @php dynamic_sidebar('footer-widget-2') @endphp
            </div>

            <div class="footer-cols working-hours mt-8 sm:mt-0">
                <h3 class="mb-4">Working Hours</h3>
                <span>Mon-Fri:<br />
                    10AM - 6PM</span><br /><br />
                <span class="mt-4">Sat-Sun: Closed</span>

                <h3 class="mt-10">Follow US</h3>
                <a href="{{ $facebook }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $youtube }}"><i class="fa-brands fa-youtube"></i></a>
                <a href="{{ $instagram }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $linkedin }}"><i class="fa-brands fa-linkedin"></i></a>
            </div>

            <div
                class="footer-cols contact-us order-first xl:order-last col-span-2 sm:col-span-3 xl:col-span-1 mb-10 xl:mb-0">
                <div class="contact-us-wrapper bg-blue-main p-8 rounded-2xl grid gap-y-1">
                    <h3 class="mb-8">Contact Us</h3>
                    <div class="grid grid-rows-1 sm:grid-rows-2 sm:grid-flow-col xl:grid-rows-1 gap-2 xl:grid-flow-row">
                        <div><i class="fa-solid fa-phone-flip mr-3 w-8"></i>
                            <span>{{ $phone }}</span>
                        </div>
                        <div><i class="fa-brands fa-whatsapp mr-3 w-8"></i>
                            <span>{{ $whatsapp }}</span>
                        </div>
                        <div class="xl:mt-7 inline-flex items-center">
                            <i class="fa-regular fa-envelope mr-3 w-8"></i>
                            <a href="mailto:{{ $email }}" class="text-2xl xl:text-xl">{{ $email }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom mt-14 grid gap-y-2">
            <div class="justify-self-start">
                <a class="header-logo" href="{{ home_url('/') }}">
                    <img class="header-logo-img w-[240px]"
                        src="{{ get_template_directory_uri() }}/resources/images/Header-logo.svg" />
                </a>
            </div>
            <div class="copyright-row grid grid-flow-col border-t border-blue-main pt-2 text-sm font-medium">
                <div>© Breathe-Easy HK Limited. {{ date('Y') }} All Rights Reserved
                </div>
                <div class="footer-menu text-right">
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false]) !!}
                </div>

            </div>
        </div>
</footer>
