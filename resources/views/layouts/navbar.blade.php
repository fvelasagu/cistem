<nav class="navbar navbar-expand-md bg-info navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav d-flex justify-content-between w-100 px-2">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('index') ? 'active' : ''}}" href="{{ route('index') }}"><h5 class="m-0">Inicio</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about_us') ? 'active' : ''}}" href="{{ route('about_us') }}"><h5 class="m-0">Quienes somos</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('specialties') ? 'active' : ''}}" href="{{ route('specialties') }}"><h5 class="m-0">Especialidades</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : ''}}" href="{{ route('contact') }}"><h5 class="m-0">Contacto</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://beta-sacmed.novacaribe.com/Rol/11077" target="_blank"><h5 class="m-0">Reservar hora</h5></a>
          </li>
        </ul>
      </div>
    </div>
</nav>