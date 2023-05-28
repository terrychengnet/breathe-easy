{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="section-timeline">
      <div class="container">
        <h1 class="section-title">Our Service</h1>
        <div class="timeline-body">
          {{--  --}}
          <div class="timeline__item grid grid-cols-12 gap-1 mb-[60px]">
            <div class="timeline__content-wrap pt-[20px] md:pt-[40px]
            col-span-7 
            md:col-span-5
            col-start-7
            order-2 
            md:order-1">
              <h2 class="section-heading mb-[25px]">100% Safe Cleaning Products</h2>
              <p class="description mb-[25px]">We use non-toxic products which are perfectly safe and pose zero risk to children, pregnant women, the elderly or pets.</p>
              <a class="btn" href=#>Read More</a>
            </div>
            <div class="timeline__img-wrap block relative 
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
              <div class="timeline__img-shade absolute left-0 right-0 top-[60px] md:top-[80px] aspect-square bg-grey rounded-[40px] m-[40px]"></div>
            </div>
          </div>
          {{--  --}}
           {{--  --}}
           <div class="timeline__item grid grid-cols-12 gap-1 mb-[60px]">
            <div class="timeline__content-wrap pt-[20px] md:pt-[40px] 
              col-span-7
              md:col-span-5
              col-start-7
              md:col-start-8 
              order-2">
              <h2 class="section-heading mb-[25px]">Extend Aircon Lifespan & Lower Electricity Bills</h2>
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
              <div class="timeline__img-shade absolute left-0 right-0 top-[80px] aspect-square bg-grey rounded-[40px] m-[40px]"></div>
            </div>
          </div>
          {{--  --}}
        </div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
