{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section>
      <div class="container">
        <h1 class="section-title">Our Service</h1>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
