<header class="header">
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{$siteName}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        {{-- <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul> --}}
        @if (has_nav_menu('primary_menu'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_menu') }}">
          {!! wp_nav_menu([
          'theme_location' => 'primary_menu',
          'menu_class' => 'navbar-nav',
          'walker' => new Custom_Walker_Nav_Menu()
          ]) !!}
        </nav>
        @endif

      </div>
    </div>
  </nav>

</header>
