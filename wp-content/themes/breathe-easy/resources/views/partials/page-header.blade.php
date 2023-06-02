@if (is_page_template('template-home.blade.php'))
    <div class="relative flex w-screen h-screen bg-cover bg-right md:bg-center min-h-[600px] md:min-h-[800px] border-b-[15px] border-blue-main"
        style="background-image:url({{ get_template_directory_uri() }}/resources/images/hero-bg.jpg);">
        <div class="relative z-30 grid grid-cols-12 gap-1 content-end">
            {{-- Hero Content --}}
            <div class="hero-content col-start-2 col-span-8 text-white">
                <p class="hero-pre-txt uppercase text-[15px] sm:text-[20px] md:text-[25px] font-bold mb-7">
                    GET THE BREATHE-EASY EXPERIENCE
                </p>
                <h1 class="text-[50px] sm:text-[80px] md:text-[110px] font-bold leading-[1] mb-8 md:mb-16">Aircon
                    Cleaning Specialists</h1>
                <h3 class="text-[20px] sm:text-[30px] md:text-[40px] font-light leading-[1.4] mb-16">Industry-Leading
                    practices & uncompromising integrity,unrivalled customer service, and total customer satisfaction.
                </h3>
            </div>
            <div class="grid hero-more-wrap col-span-2 place-items-end">
                <span class="cursor-pointer mb-16">
                    <i class="fa-regular fa-circle-arrow-down text-[40px] sm:text-[50px] md:text-[70px] text-white"></i>
                </span>
            </div>
        </div>
        <div class="hero-bg-shape absolute z-1 left-0 right-0 bottom-0">
            <img class="w-100" src="{{ get_template_directory_uri() }}/resources/images/hero-bg-shape.svg" />
        </div>
        <div class="hero-bg-mask absolute z-0 top-0 left-0 right-0 bottom-0 bg-black/20"></div>
    </div>
@else
    <div class="relative flex bg-blue-main border-b-[15px] border-blue-second">
        <div class="container pt-[200px]">
            <h1 class="page-title uppercase text-blue-second">{{ the_title() }}</h1>
        </div>
    </div>
@endif
