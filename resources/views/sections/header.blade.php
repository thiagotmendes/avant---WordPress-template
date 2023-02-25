<header class="main-header pt-4 pb-4">
  <div class="container no-gutters d-flex align-items-center justify-content-between">
    <a class="brand col-md-3" href="{{ home_url('/') }}">
      <img src="{{ asset('images/logo.svg') }}" alt=' {{ get_bloginfo('name') }} ' class="img-fluid">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav col-md-9 d-none d-sm-flex justify-content-between align-items-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav col-md-8 d-flex justify-content-between', 'echo' => false]) !!}
        <a href="" class="main-button main-button--orange">
          Entre em contato
        </a>
      </nav>
    @endif

    <div class="main-btn__mobile">
      <div class="main-btn__mobile--bar">

      </div>
    </div>

    <div class="main-nav__mobile">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </div>

  </div>
</header>
