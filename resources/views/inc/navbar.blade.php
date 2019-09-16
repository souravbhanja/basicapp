<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">#LOGO#</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-info" aria-controls="navbars-info" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbars-info">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('about-us') ? 'active' : ''}}" href="/about-us">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('contact-us') ? 'active' : ''}}" href="/contact-us">Contact</a>
      </li>
    </ul>
  </div>
</nav>