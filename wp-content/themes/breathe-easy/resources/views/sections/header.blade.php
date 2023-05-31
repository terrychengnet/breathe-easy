<header class="header fixed z-50 top-0 left-0 right-0 h-[85px] bg-white/20 ease-in duration-100">
  <div class="container h-[100%] flex justify-between items-center">
      <a class="header-logo w-[270px] h-[62px] justify-self-start" href="{{ home_url('/') }}"></a> 
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary text-blue-main hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
        </nav>
      @endif
      <div class="header-contact">
        <a class="btn btn-contact" href="/contact-us">Contact Us</a>
      </div>
  </div>
</header>