<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
  <main id="main" class="main relative">
    @yield('content')
  </main>
@include('sections.footer')
