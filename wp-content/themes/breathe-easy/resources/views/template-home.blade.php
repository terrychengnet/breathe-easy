{{--
  Template Name: Home
--}}

@extends('layouts.app')

@include('partials.page-header')

    {{-- Timeline Module --}}
    <section class="section-timeline">
      <div class="container">
        <h1 class="section-title">Our Service</h1>
        <div class="timeline-body relative">
          {{--  Text on left  --}}
          <div class="timeline__item relative z-20 grid grid-cols-12 gap-1 mb-[60px]">
            <div class="timeline__content-wrap pt-[20px] md:pt-[40px]
            col-span-7
            col-start-6
            sm:col-span-6
            sm:col-start-7
            md:col-span-5
            order-2 
            md:order-1">
              <h2 class="section-heading mb-[25px]">100% Safe Cleaning Products
                <span class="timeline-dot hidden sm:block absolute top-[50px] 
                left-[-17%]
                md:left-0
                right-0"></span>
              </h2>
              <p class="description mb-[25px]">We use non-toxic products which are perfectly safe and pose zero risk to children, pregnant women, the elderly or pets.</p>
              <a class="btn" href=#>Read More</a>
            </div>
            <div class="timeline__img-wrap block relative mb-5 sm:mb-0
            col-span-4
            md:col-span-5
            md:col-start-8
            order-1 
            md:order-2">
              <div class="timeline__img flex relative z-10 place-content-center rounded-[40px] aspect-square overflow-hidden">
                <span class="timeline__num absolute z-10 text-white font-bold text-[100px] md:text-[200px] self-center">1</span>
                <div class="hero-bg-mask absolute z-0 top-0 left-0 right-0 bottom-0 bg-grey-dark/20"></div>
                <img class="" src="{{ get_template_directory_uri() }}/resources/images/timeline-img-1.jpg"/>
              </div>
              <div class="timeline__img-shade absolute left-0 right-0 top-[35px] sm:top-[50px] md:top-[80px] aspect-square bg-grey rounded-[30px] sm:round-[30px] md:rounded-[40px] m-[20px] sm:m-[30px] md:m-[40px]"></div>
            </div>
          </div>

           {{--  Text on right  --}}
           <div class="timeline__item relative z-20 grid grid-cols-12 gap-1 mb-[60px]">
            <div class="timeline__content-wrap pt-[20px] md:pt-[40px] 
              col-span-7
              col-start-6
              sm:col-span-6
              sm:col-start-7
              md:col-span-5
              md:col-start-8 
              order-2">
              <h2 class="section-heading mb-[25px]">Extend Aircon Lifespan & Lower Electricity Bills
                <span class="timeline-dot hidden sm:block absolute top-[50px] 
                left-[-17%]
                md:left-0 
                right-0"></span>
              </h2>
              <p class="description mb-[25px]">Our step-by-step methodology prioritizes the integrity of your AC units. With your AC cleaned, your AC will be cooler and your electricity bills will be lower.</p>
              <a class="btn" href=#>Read More</a>
            </div>
            <div class="timeline__img-wrap relative 
            col-span-4
            md:col-span-5">
              <div class="timeline__img flex relative z-10 place-content-center rounded-[40px] aspect-square overflow-hidden">
                <span class="timeline__num absolute z-10 text-white font-bold text-[100px] md:text-[200px] self-center">2</span>
                <div class="hero-bg-mask absolute z-0 top-0 left-0 right-0 bottom-0 bg-grey-dark/20"></div>
                <img class="" src="{{ get_template_directory_uri() }}/resources/images/timeline-img-1.jpg"/>
              </div>
              <div class="timeline__img-shade absolute left-0 right-0 top-[35px] sm:top-[50px] md:top-[80px] aspect-square bg-grey rounded-[30px] sm:round-[30px] md:rounded-[40px] m-[20px] sm:m-[30px] md:m-[40px]"></div>
            </div>
          </div>
          
        {{-- Timeline --}}
        <div class="timeline absolute z-0 top-0 left-0 right-0 bottom-0 p-[50px]">
            <span class="default-line absolute w-[5px] h-[100%] bg-grey 
            left-[16%] 
            sm:left-[41%] 
            translate-x-[0]
            md:left-[50%]
            md:translate-x-[-50%]"></span>
            <span class="draw-line absolute w-[5px] h-[0] bg-grey-dark 
            left-[16%] 
            sm:left-[41%] 
            translate-x-[0]
            md:left-[50%]
            md:translate-x-[-50%]"></span>
        </div>
        </div>
      </div>
    </section>

    {{-- Testimonials Module --}}
    <section class="section-testimonials">
      <div class="container">
        <div class="testimonial-slider">
          <div class="tes-item">
            <div class="tes-wrap grid grid-cols-12 mx-[15px]">
              <div class="tes-container relative 
                col-span-12
                lg:col-span-8 
                lg:col-start-3
                bg-blue-second
                py-[40px]
                px-[40px]
                pt-[100px]
                lg:pt-[40px]
                lg:px-[80px]
                mt-[105px]
                rounded-[35px]">
                <img class="absolute top-[-85px] left-[40px] lg:left-[80px]" src="{{ get_template_directory_uri() }}/resources/images/quote-open.svg"/>
                <p class="block lg:hidden text-center text-[30px] text-blue-main font-bold mb-[25px]">CHUN HO</p>
                <p class="tes-quote quote mb-[30px] pr-0 lg:pr-[20%]">Amazing service! The team was really professional and friendly, explained everything to me with recommendations. Really efficient and I can already feel the difference!</p>
                <div class="tes-profile absolute 
                  top-[-100px] 
                  right-auto
                  left-1/2
                  transform 
                  -translate-x-1/2
                  lg:right-[-100px]
                  lg:left-auto
                  lg:transform-none
                  lg:translate-x-0">
                  <img class="block aspect-square rounded-[50%] w-[180px] lg:w-[230px] mb-[20px]" src="{{ get_template_directory_uri() }}/resources/images/avatar.jpg"/>
                  <p class="text-black font-bold 
                  hidden
                  lg:block
                  text-[30px]
                  text-center
                  ">CHUN HO</p>
                </div>
                <div class="tes-btm flex justify-between">
                  <div class="tes-rating">
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                  </div>
                  <img class="" src="{{ get_template_directory_uri() }}/resources/images/quote-close.svg"/>
                </div>
              </div>
            </div>
          </div>
          <div class="tes-item">
            <div class="tes-wrap grid grid-cols-12 mx-[15px]">
              <div class="tes-container relative 
                col-span-12
                lg:col-span-8 
                lg:col-start-3
                bg-blue-second
                py-[40px]
                px-[80px]
                pt-[100px]
                lg:pt-[40px]
                mt-[105px]
                rounded-[35px]">
                <img class="absolute top-[-85px] left-[80px]" src="{{ get_template_directory_uri() }}/resources/images/quote-open.svg"/>
                <p class="block lg:hidden text-center text-[30px] text-blue-main font-bold mb-[25px]">CHUN HO</p>
                <p class="tes-quote quote mb-[30px] pr-0 lg:pr-[20%]">Amazing service! The team was really professional and friendly, explained everything to me with recommendations. Really efficient and I can already feel the difference!</p>
                <div class="tes-profile absolute 
                  top-[-100px] 
                  right-auto
                  left-1/2
                  transform 
                  -translate-x-1/2
                  lg:right-[-100px]
                  lg:left-auto
                  lg:transform-none
                  lg:translate-x-0">
                  <img class="block aspect-square rounded-[50%] w-[180px] lg:w-[230px] mb-[20px]" src="{{ get_template_directory_uri() }}/resources/images/avatar.jpg"/>
                  <p class="text-black font-bold 
                  hidden
                  lg:block
                  text-[30px]
                  text-center
                  ">CHUN HO</p>
                </div>
                <div class="tes-btm flex justify-between">
                  <div class="tes-rating">
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                    <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>
                  </div>
                  <img class="" src="{{ get_template_directory_uri() }}/resources/images/quote-close.svg"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Contact Form Module --}}
    @php
    $info = get_field('contact_info', 'option');
    $whatsapp = $info['whatsapp_number'];
    @endphp
    <section class="section-contact bg-blue-main py-[95px]">
      <div class="container">
        <div class="grid grid-cols-12">
          <div class="
            col-span-12
            lg:col-span-4
            mb-[80px]
            lg:mb-0">
            <h1 class="text-white leading-[1.1] mb-[70px]">Get a Free Consultation Now</h1>
            <p class="text-white text-[25px] font-[300] leading-[1.3]">Fill in the form and we'll give you a call for a free consultation. Your personal information stays private and secure.</p>
            <div class="form-line-break relative text-center">
              <span class="relative z-10 inline-block text-white text-[40px] font-bold bg-blue-main p-[25px] mx-auto">OR</span>
              <span class="form__white-line 
                absolute
                left-0
                right-0
                top-1/2 
                transform 
                -translate-y-1/2
                w-full 
                h-[2px] 
              bg-white
              "></span>
            </div>
            <p class="text-white text-[25px] font-[300] leading-[1.3] mb-[20px]">If you wish, you can also reach us directly via whatsapp for an instant consultation.</p>            
            <p class="flex">
              <i class="fa-brands fa-whatsapp text-white text-[40px] mr-4"></i>
              <span class="text-white font-bold text-[25px] self-center">{{ $whatsapp }}</span>
            </p>
          </div>
            <div class="
              col-span-12
              lg:col-span-5
              lg:col-start-7">
            <form class="contact-form">
              <input class="form-input" type="text" name="name" placeholder="Name*"/>
              <input class="form-input" type="text" name="phone" placeholder="Phone number*"/>
              <input class="form-input" type="email" name="email" placeholder="E-mail*"/>
              <textarea class="form-input
              min-h-[250px]
              text-[25px]
              border-t-[2px]
              border-r-[2px]
              border-l-[2px]
              py-[15px]
              px-[20px]
              my-[50px]
              rounded-[35px]
              " name="form-message" form="usrform"  placeholder="Message"></textarea>
              <input class="btn btn-submit form-submit" type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
    </section>


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
