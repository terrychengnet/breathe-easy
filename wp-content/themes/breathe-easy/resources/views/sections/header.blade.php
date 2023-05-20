<header class="header">
  <div class="container mx-auto">
    <a class="brand" href="{{ home_url('/') }}">
      <img class="header-logo" src="{{ get_template_directory_uri() }}/resources/images/Header-logo.svg"/>
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
