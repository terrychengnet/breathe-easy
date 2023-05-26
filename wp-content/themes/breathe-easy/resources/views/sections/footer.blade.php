<footer class="bg-blue-second">
    <div class="footer-wrapper container py-8 lg:py-20">
        <div class="footer-top grid grid-cols-3 lg:grid-cols-4 text-white gap-4">
            <div class="footer-widget footer-cols widget-1">
                <h3>Home</h3>

                <h3 class="mt-10">Service</h3>
                <ul>
                    <li>Service 1</li>
                    <li>Service 2</li>
                    <li>Service 3</li>
                    <li>Service 4</li>
            </div>

            <div class="footer-widget footer-cols widget-2">
                <h3>About</h3>

                <h3 class="mt-10">Resources</h3>
                <ul>
                    <li>FAQ</li>
                    <li>Giving Back</li>
                    <li>Blog</li>
                    <li>YouTube</li>
            </div>

            <div class="footer-cols working-hours">
                <h3 class="mb-4">Working Hours</h3>
                <span>Mon-Fri:<br />
                    10AM - 6PM</span><br /><br />
                <span class="mt-4">Sat-Sun: Closed</span>

                <h3 class="mt-10">Follow US</h3>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>

            <div class="footer-cols contact-us order-first lg:order-last col-span-3 lg:col-span-1 mb-10 lg:mb-0">
                <div class="contact-us-wrapper bg-blue-main p-8 rounded-2xl grid gap-y-1">
                    <h3 class="mb-8">Contact Us</h3>
                    <div class="grid grid-rows-2 grid-flow-col lg:grid-rows-1 gap-2 lg:grid-flow-row">
                        <div><i class="fa-solid fa-phone-flip mr-3 w-8"></i><span>+852 9887 7273</span></div>
                        <div><i class="fa-brands fa-whatsapp mr-3 w-8"></i><span>+852 9887 7273</span></div>
                        <div class="lg:mt-7 inline-flex items-center"><i
                                class="fa-regular fa-envelope mr-3 w-8"></i><span
                                class="text-2xl lg:text-xl">info@breathe-easyhk.com</span></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom mt-14 grid gap-y-2">
            <div>
                <a class="header-logo justify-self-start" href="{{ home_url('/') }}">
                    <img class="header-logo-img w-[240px]"
                        src="{{ get_template_directory_uri() }}/resources/images/Header-logo.svg" />
                </a>
            </div>
            <div class="copyright-row grid grid-flow-col border-t border-blue-main pt-2 text-sm font-medium">
                <div>© Breathe-Easy HK Limited. 2023 All Rights Reserved</div>
                <div class="footer-menu text-right">Footer Menu</div>
            </div>
        </div>
</footer>
