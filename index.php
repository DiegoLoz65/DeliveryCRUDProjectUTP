<!DOCTYPE html>
<html lang="en">
<head>
<?php include("db.php") ?>
    <meta charset="UTF-8">
    <title>Login</title>
        <!-- BOOTSTRAP 4-->
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
    <a class="navbar-brand">
      <img
        src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/841/5131510841_465fd3cb-63b8-4bb3-8a23-6214f9a2f621.png?cb=1619381302"
        height="70"
        alt=""
        loading="lazy"
      />
    </a>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>


<div style="width: auto; margin-left: auto; margin-right: auto">
<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>


<div class="container">
  <div class="row justify-content-center">

    <div class="col-lg-4 col-md-12">

    </div>

    <div class="col-lg-4 col-md-6">
    <div class="row">

<div class="card card-body">
    <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-toggle="pill"
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Iniciar Sesion</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-toggle="pill"
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Registrarse</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div
    class="tab-pane fade show active"
    id="pills-login"
    role="tabpanel"
    aria-labelledby="tab-login"
  >
    <form action="save.php" method="POST">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="number" name="numero" class="form-control" />
        <label class="form-label" >Número de Celular</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="contrasena" class="form-control" />
        <label class="form-label">Contraseña</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="loginCheck"
              checked
            />
            <label class="form-check-label" for="loginCheck"> Recuérdame </label>
          </div>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" name="login" value="Login" class="btn btn-dark btn-block mb-4">Ingresar como Cliente</button>
      <!-- Submit button -->
      <button type="submit" name="loginAdmin" value="Login" class="btn btn-dark btn-block mb-4">Ingresar como Administrador</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>¿No eres miembro aún? ¡Regístrate!</p>
      </div>
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >




    <form action="save.php" method="POST">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" name="nombre" class="form-control" />
        <label class="form-label">Nombre</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" name="apellido" class="form-control" />
        <label class="form-label">Apellido</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" name="numero" class="form-control" />
        <label class="form-label">Número de Celular</label>
      </div>

      <!-- Age input -->
      <div class="form-outline mb-4">
        <input type="text" name="edad" class="form-control" />
        <label class="form-label">Edad</label>
      </div>

      <!-- Adress input -->
      <div class="form-outline mb-4">
        <input type="text" name="direccion" class="form-control" />
        <label class="form-label">Dirección</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="contrasena" class="form-control" />
        <label class="form-label">Contraseña</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="registerCheck"
          checked
          aria-describedby="registerCheckHelpText"
        />
        <label class="form-check-label" for="registerCheck">
          Estoy de acuerdo con los términos y condiciones.
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" name="newClient" value="NewClient" class="btn btn-dark btn-block mb-3">Registrarme e Ingresar</button>
    </form>
  </div>
</div>
<!-- Pills content -->
</div>
</div>


    </div>

    <div class="col-lg-4 col-md-6">

    </div>

  </div>
</div>

</div>














<!-- SCRIPTS -->
<!-- MDB -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>



</body>
</html>