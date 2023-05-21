<header class="header h-[85px] bg-grey">
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
        <a class="inline-block text-[20px] uppercase font-roboto font-bold text-white bg-blue-second color-white px-8 py-3 rounded-[10px]" href="/contact-us">Contact Us</a>
      </div>
  </div>
</header>
