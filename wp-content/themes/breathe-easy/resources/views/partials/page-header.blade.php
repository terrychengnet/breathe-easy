@if (is_page_template('template-home.blade.php'))
  <div class="flex w-screen h-screen bg-cover bg-center" style="background-image:url({{ get_template_directory_uri() }}/resources/images/hero-bg.jpg);">
    <div class="grid grid-cols-12 gap-1 content-end">
      {{-- Hero Content --}}
      <div class="hero-content col-start-2 col-span-8 text-white">
        <p class="hero-pre-txt uppercase text-[25px] font-bold mb-7">
          GET THE BREATHE-EASY EXPERIENCE
        </p>
        <h1 class="text-[110px] font-bold leading-[1] mb-16">Aircon Cleaning Specialists</h1>
        <h3 class="text-[40px] font-light leading-[1.1] mb-16">Industry-Leading practices & uncompromising integrity,unrivalled customer service, and total customer satisfaction.</h3>
      </div>
      <div class="grid hero-more-wrap col-span-2 place-items-end">
        <span class="cursor-pointer mb-16">
          <i class="fa-regular fa-circle-arrow-down text-[70px] text-white"></i>
        </span>
      </div>
    </div>
    {{-- <div class="hero-bg-shape"></div> --}}
  </div>
@endif
