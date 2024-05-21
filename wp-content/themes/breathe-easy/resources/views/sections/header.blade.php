<header class="header fixed z-[999] top-0 left-0 right-0 h-[85px] bg-white/30 ease-in duration-100">
  <div class="container h-[100%] flex justify-between items-center">
      <a class="header-logo w-[270px] h-[62px] justify-self-start mr-[20px] md:mr-[30px]" href="{{ home_url('/') }}"></a> 
        @if (has_nav_menu('primary_navigation'))
          <nav class="nav-primary text-blue-main hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
          </nav>
          <div class="lang-switch hidden sm:flex border-l-[2px] border-white pr-[20px]">
            <span class="lang-icon hidden sm:block pl-[10px] lg:pl-[15px]">
              <i class="fa-solid fa-globe text-white"></i>
            </span>

            @php 
            $langs = apply_filters( 'wpml_active_languages', NULL, array ('skip_missing' => 0 ) ) ;
            foreach ($langs as $lang) {
              // echo '<pre>';
              // print_r($lang);
              // echo '</pre>';
                if ($lang['active'] === 0) {
                    $lang_name = '';
                    if ($lang['code'] === 'en') {
                      $lang_name = 'EN';
                    }

                    if ($lang['code'] === 'zh-hk') {
                      $lang_name = '中文';
                    }
                    echo '<a class="text-white hover:text-blue-main ml-[10px] whitespace-nowrap" href="' . $lang['url'] . '">' . $lang_name . '</a>';
                }
            }
            @endphp            
          </div>
        @endif
      <div class="header-contact">
        {{-- <a class="btn btn-contact" href="/contact-us">Contact Us</a> --}}
        <a class="btn btn-contact" href="https://wa.me/85298877273?text=Hi%20I%27m%20interested%20in%20getting%20my%20ACs%20cleaned">CONTACT US</a>
      </div>
      <button class="menuBtn ml-[15px] block lg:hidden">
        <div class="menuBtn_lines">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
  </div>
  <div class="mobile-menu hidden bg-blue-main/95">
    <div class="container">
      @if (has_nav_menu('primary_navigation'))
        <div class="mobile-menu-wrap pt-[40px] pb-[25px]">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'mobile-menu-list', 
            'echo' => false]) !!}
        </div>
      @endif

      {{--  --}}
      <div class="lang-switch flex sm:hidden pb-[20px]">
        <span class="lang-icon mr-[10px]">
          <i class="fa-solid fa-globe text-blue-second"></i>
        </span>

        @php 
        $langs = apply_filters( 'wpml_active_languages', NULL, array ('skip_missing' => 0 ) ) ;
        foreach ($langs as $lang) {
          // echo '<pre>';
          // print_r($lang);
          // echo '</pre>';
          if ($lang['active'] === 0) {
                $lang_name = '';
                if ($lang['code'] === 'en') {
                  $lang_name = 'EN';
                }

                if ($lang['code'] === 'zh-hk') {
                  $lang_name = '中文';
                }

                if ($lang['active'] === 0) {
                  echo '<a class="text-white hover:text-blue-second whitespace-nowrap" href="' . $lang['url'] . '">' . $lang_name . '</a>';
                }
              }
        }
        @endphp            
      </div>
      {{--  --}}
    </div>
  </div>
</header>