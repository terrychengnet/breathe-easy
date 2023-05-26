<header class="header fixed z-50 top-0 left-0 right-0 h-[85px] bg-white/20">
  <div class="container h-[100%] flex justify-between items-center">
      <a class="header-logo justify-self-start" href="{{ home_url('/') }}">
        <img class="header-logo-img w-[270px]" src="{{ get_template_directory_uri() }}/resources/images/Header-logo.svg"/>
      </a> 
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary text-blue-main" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
        </nav>
      @endif
      <div class="header-contact">
        <a class="btn btn-contact" href="/contact-us">Contact Us</a>
      </div>
  </div>
</header>