<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>


<div style="position: absolute; left: 200px; top: 110px; height: 400px; width: 700px; padding: 1em;">
<h1> Agregar nuevo cliente </h1>
</div>
<div style="position: absolute; left: 200px; top: 200px; height: 400px; width: 700px; padding: 1em;">

<div class="row">

<div class="card card-body">
<form action="save.php" method="POST">
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

  
  <div class="form-outline mb-4">
    <input type="text" name="numero" class="form-control" />
    <label class="form-label" for="form6Example3">Número de Celular</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="text" name="edad" class="form-control" />
    <label class="form-label" for="form6Example4">Edad</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="text" name="direccion" class="form-control" />
    <label class="form-label" for="form6Example5">Dirección</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="contrasena" class="form-control" />
    <label class="form-label" for="form6Example5">Contraseña</label>
  </div>
  
  <button type="submit" class="btn btn-dark btn-block mb-4" name="save" value="Save">Guardar Información</button>
</form>
</div>
</div>
</div>

<div style="position: absolute; left: 1000px; top: 185px;  padding: 1em;">
<img src='https://i.postimg.cc/hthzyn6v/pexels-sora-shimazaki-5668857.jpg' width="550px" height="367px" class="img-fluid rounded"/>
</div>



<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>
