<!-- barra menu -->

<nav class="navbar sticky-top navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/cursosenaco.co"><img src="assets/img/Logo_senas.svg" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars" id="menu-btn"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/cursosenaco.co/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cursosenaco.co/learn.php">Cursos</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="/cursosenaco.co/#empezar">empecemos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/cursosenaco.co/#tipopersona">Características</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empezar
          </a>
          <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
            <li>
              <a class="nav-link " href="/cursosenaco.co/#empezar">Empecemos</a>
            </li>
            <li>
              <a class="nav-link " href="/cursosenaco.co/#tipopersona">Características</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/cursosenaco.co/#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/cursosenaco.co/#equipo">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#footer">Contactos</a>
        </li>




      </ul>
      <ul class="navbar-nav d-flex me-auto mb-1 mb-lg-0">
        <?php if (!empty($user)) : ?>
          <li class="nav-item d-flex justify-content-end">
            <a type="button" class="btn btn-secondary" href="logout.php">Cerrar Sesión</a>
          </li>
        <?php else : ?>
          <li class="nav-item d-flex justify-content-end">
            <a type="button" class="btn btn-primary" href="login.php">Iniciar Sesión</a>
          </li>
          <li class="nav-item d-flex justify-content-end">
            <a type="button" class="btn btn-danger" href="signup.php">Registrarte</a>
          </li>

        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>