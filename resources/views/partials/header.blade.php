<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Active.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ Route::current()->getName() === 'home' ? 'active' : ''}}">Home</a></li>
          <li><a href="{{ route('articles.index') }}" class="{{ Route::current()->getName() === 'articles.index' || Route::current()->getName() === 'articles.show' ? 'active' : ''}}">Blog</a></li>
          <li><a href="{{ route('auth.login') }}" class="{{ Route::current()->getName() === 'auth.login' ? 'active' : ''}}">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
</header>
