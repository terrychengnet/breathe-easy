@if (is_page_template('template-home.blade.php'))
  @php
    $hero_pre_txt = get_field('hero_banner_pre-text');
    $hero_title = get_field('hero_banner_title');
    $hero_content = get_field('hero_banner_content');
    $hero_bg_img = get_field('hero_banner_image');
  @endphp

  <div class="home-hero relative flex w-full h-auto md:h-screen bg-cover bg-right md:bg-center min-h-[600px] md:min-h-[800px] border-b-[15px] border-blue-main" 
        style="background-image:url({{  $hero_bg_img['url']; }});">
    <div class="relative z-30 grid grid-cols-12 gap-1 content-end">
      {{-- Hero Content --}}
      <div class="hero-content col-start-2 md:col-start-2 col-span-9 md:col-span-8 text-white"  data-speed=".35">
        <p class="hero-pre-txt relative uppercase text-[15px] sm:text-[20px] md:text-[25px] font-bold mb-7 opacity-0 top-[40px]">
          {{  $hero_pre_txt; }}
        </p>
        <h1 class="hero-title relative text-[50px] md:text-[80px] lg:text-[90px] xl:text-[110px] font-bold leading-[1] mb-8 md:mb-16
        opacity-0
        top-[40px]
        ">{{  $hero_title; }}</h1>
        <h3 class="hero-sub-text text-[20px] md:text-[30px] lg:text-[35px] xl:text-[40px] font-light leading-[1.2] md:leading-[1.4] mb-10 md:mb-16">
          {{  $hero_content; }}
        </h3>
      </div>
      <div class="grid hero-more-wrap col-start-11 col-span-1 place-items-end">
        <span class="cursor-pointer mb-16">
          <i id="hero-read-more" class="fa-regular fa-circle-arrow-down text-[40px] sm:text-[50px] md:text-[70px] text-white hover:text-blue-second"></i>
        </span>
      </div>
    </div>
    <div class="hero-bg-shape absolute z-1 left-0 right-0 bottom-0">
      <img class="w-screen" src="{{ get_template_directory_uri() }}/resources/images/hero-bg-shape.svg"/>
    </div>
    <div class="hero-bg-mask absolute z-0 top-0 left-0 right-0 bottom-0 bg-black/20"></div>
  </div>
@else
  <div class="relative flex bg-blue-main border-b-[15px] border-blue-second">
    <div class="container pt-[100px] md:pt-[200px]">
      <div class="grid grid-cols-1 lg:grid-cols-3">
        <h1 class="col-span-1 lg:col-span-2 page-title uppercase text-blue-light mb-[40px] lg:mb-[10px]">{{ the_title() }}</h1>

        @if(!is_404())
          <div class="breadcrumbs col-span-1 flex mb-[20px] place-items-end lg:place-content-end">
            <span>
              <a class="text-blue-light font-bold" href="{{ home_url('/') }}">Home</a>
            </span>
            <span class="px-[5px] text-blue-light font-bold">/</span>
            {{-- If has parent --}}
            @if(is_page() && has_post_parent())
              <span>
                <a class="text-blue-light font-bold" href="{{ get_permalink( $post->post_parent ) }}">
                  {{ get_the_title( $post->post_parent ) }}
                </a>
              </span>
              <span class="px-[5px] text-blue-light font-bold">/</span>
            @endif
            {{-- If is a blog page --}}
            @if(is_single())
              <span>
                <a class="text-blue-light font-bold" href="{{ home_url('/blog') }}">Blog</a>
              </span>
              <span class="px-[5px] text-blue-light font-bold">/</span>
            @endif
            <span class="text-blue-second font-bold"> {{ the_title() }} </span>
          </div>
        @endif

      </div>
    </div>
  </div>
@endif
