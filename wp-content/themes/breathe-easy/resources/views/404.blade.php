@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section class="section-page-not-found">
    <div class="container text-center py-[50px]">
      <h1 class="text-blue-second">Error 404</h1>
      <p class="description text-blue-second">Sorry, but the page you are trying to view does not exist.</p>
    </div>
  </section>
@endsection
