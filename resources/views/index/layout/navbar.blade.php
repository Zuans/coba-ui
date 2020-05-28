<nav class="navbar navbar-expand-md navbar-light bg-transparent">
  <a class="navbar-brand nav-title" href="#">Zuans</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-2" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item ml-3 nav-link{{ request()->is('/') == '/' ? ' active' : '' }} font-weight-bold " href="/">Home</a>
      <a class="nav-item  ml-3 nav-link{{ request()->is('about') == 'about' ? ' active' : '' }} font-weight-bold " href="/about">About</a>
      <a class="nav-item ml-3 nav-link{{ request()->is('contact') == 'contact' ? ' active' : '' }} font-weight-bold " href="/contact">Contact</a>
    </div>
  </div>
</nav>