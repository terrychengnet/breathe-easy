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
    <div class="footer-wrapper container py-8 lg:py-20">
        <div class="footer-top grid grid-cols-12 text-white gap-4">
            <div class="footer-nav-wrap col-span-5">
                <div class="footer-menu text-left">
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false]) !!}
                </div>
            </div>

            <div class="footer-cols col-span-3 working-hours">
                <h3 class="mb-4">Working Hours</h3>
                <span class="block mb-5">Mon-Fri:<br />
                    10AM - 6PM</span>
                <span class="block mt-4">Sat-Sun:<br /> Closed</span>

                <h3 class="mt-10">Follow US</h3>
                @if($facebook)
                    <a href="{{ $facebook }}"><i class="fa-brands fa-facebook"></i></a>
                @endif
                @if($youtube)
                    <a href="{{ $youtube }}"><i class="fa-brands fa-youtube"></i></a>
                @endif
                @if($instagram)
                    <a href="{{ $instagram }}"><i class="fa-brands fa-instagram"></i></a>
                @endif
                @if($linkedin)
                    <a href="{{ $linkedin }}"><i class="fa-brands fa-linkedin"></i></a>
                @endif
            </div>

            <div class="footer-cols col-span-12 lg:col-span-4 contact-us order-first lg:order-last mb-10 lg:mb-0">
                <div class="contact-us-wrapper bg-blue-main p-8 rounded-2xl grid gap-y-1">
                    <h3 class="mb-8">Contact Us</h3>
                    <div class="grid grid-rows-2 grid-flow-col lg:grid-rows-1 gap-2 lg:grid-flow-row">
                        <div><i class="fa-solid fa-phone-flip mr-3 w-8"></i>
                            <span>{{ $phone }}</span>
                        </div>
                        <div><i class="fa-brands fa-whatsapp mr-3 w-8"></i>
                            <span>{{ $whatsapp }}</span>
                        </div>
                        <div class="lg:mt-7 inline-flex items-center">
                            <i class="fa-regular fa-envelope mr-3 w-8"></i>
                            <a href="mailto:{{ $email }}" class="text-2xl lg:text-xl">{{ $email }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom mt-14 grid gap-y-2">
            <div>
                <a class="header-logo justify-self-start" href="{{ home_url('/') }}">
                    <img class="header-logo-img w-[240px]"
                        src="{{ get_template_directory_uri() }}/resources/images/header-logo.svg" />
                </a>
            </div>
            <div class="copyright-row grid grid-flow-col border-t border-blue-main pt-2 text-sm font-medium">
                <div class="text-blue-main">© Breathe-Easy HK Limited. {{ date('Y') }} All Rights Reserved
                </div>
                <div class="footer-links text-right">
                    {!! wp_nav_menu(['theme_location' => 'footer_quick_links', 'echo' => false]) !!}
                </div>

            </div>
        </div>
</footer>
