{{--
  Template Name: About
--}}
@extends('layouts.app')
@include('partials.page-header')
@include('partials.content-about-body')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection