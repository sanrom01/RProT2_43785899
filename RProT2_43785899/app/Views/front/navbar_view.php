<nav class="navbar navbar-expand-lg bg-body-blue">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal_ultimo')?>">
      <img src="<?php echo base_url('assets/iconos/icono.png')?>" alt="marca" width="75" height="30" class= "img-fluid"/>
    </a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quienes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acercade'>Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Login</a>
        </li>
      </ul>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">buscar</button>
      </form>
    </div>
  </div>
</nav>