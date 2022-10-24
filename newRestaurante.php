<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>


<div style="position: absolute; left: 280px; top: 150px; height: 400px; width: 700px; padding: 1em;">
<h1> Agregar nuevo restaurante </h1>
</div>
<div style="position: absolute; left: 280px; top: 240px; height: 400px; width: 700px; padding: 1em;">

<div class="row">

<div class="card card-body">
<form action="save.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="nit" placeholder="Nit de la Empresa" class="form-control" autofocus>
        <label class="form-label">NIT</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="nombre" class="form-control" />
        <label class="form-label" for="form6Example2">Nombre</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="direccion" class="form-control" />
    <label class="form-label" for="form6Example3">Dirección</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="telefono" class="form-control" />
    <label class="form-label" for="form6Example4">Teléfono</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="logo" class="form-control" />
    <label class="form-label" for="form6Example4">Logo</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4" name="saveRestaurante" value="SaveRestaurante">Guardar Información</button>
</form>
</div>
</div>
</div>

<div style="position: absolute; left: 1080px; top: 110px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/4393667/pexels-photo-4393667.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>


<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>
