{{--
  Template Name: Home
--}}
@extends('layouts.app')
@include('partials.page-header')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
