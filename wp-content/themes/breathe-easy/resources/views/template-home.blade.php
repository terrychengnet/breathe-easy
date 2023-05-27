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
          <div class="timeline__item  grid grid-cols-12 gap-1">
            <div class="timeline__content-wrap col-span-5">
              <h2 class="section-heading mb-[25px]">100% Safe Cleaning Products</h2>
              <p class="description  mb-[25px]">We use non-toxic products which are perfectly safe and pose zero risk to children, pregnant women, the elderly or pets.</p>
              <a class="btn" href=#>Read More</a>
            </div>
            <div class="timeline__img-wrap realtive col-start-8 col-span-5">
              <div class="timeline__img">
                <img src="{{ get_template_directory_uri() }}/resources/images/timeline-img-1.jpg"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
