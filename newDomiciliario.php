<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>



<div style="position: absolute; left: 200px; top: 110px; height: 400px; width: 700px; padding: 1em;">
<h1> Agregar nuevo domiciliario </h1>
</div>
<div style="position: absolute; left: 200px; top: 200px; height: 400px; width: 700px; padding: 1em;">

<div class="row">

<div class="card card-body">
<form action="save.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="nombre" placeholder="Nombre Cliente" class="form-control" autofocus>
        <label class="form-label">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="apellido" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="numero" class="form-control" />
    <label class="form-label" for="form6Example3">Número de Celular</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="dni" class="form-control" />
    <label class="form-label" for="form6Example4">DNI</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <select class="form-select" name="transporte" aria-label="Default select example">
    <option selected>Medio de Transporte</option>
    <option value="Carro">Carro</option>
    <option value="Motocicleta">Motocicleta</option>
    <option value="Bicicleta">Bicicleta</option>
</select>
  </div>
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4" name="saveDomiciliario" value="SaveDomiciliario">Guardar Información</button>
</form>
</div>
</div>
</div>

<div style="position: absolute; left: 950px; top: 100px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/7706562/pexels-photo-7706562.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>

<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>


<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>
