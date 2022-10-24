<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>


<div style="position: absolute; left: 280px; top: 100px; height: 400px; width: 700px; padding: 1em;">
<h1> Agregar nuevo Producto </h1>
</div>
<div style="position: absolute; left: 280px; top: 190px; height: 400px; width: 700px; padding: 1em;">

<div class="row">

<div class="card card-body">
<form action="save.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="id"  class="form-control" autofocus>
        <label class="form-label">Id del Producto</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="nombre" class="form-control" />
    <label class="form-label" for="form6Example3">Nombre</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="descripcion" class="form-control" />
    <label class="form-label" for="form6Example4">Descripción</label>
  </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
    <input type="text" name="precio" class="form-control" />
    <label class="form-label" for="form6Example4">Precio</label>
  </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
    <input type="text" name="foto" class="form-control" />
    <label class="form-label" for="form6Example4">Foto</label>
  </div>


        <!-- Email input -->
        <div class="form-outline mb-4">
      <select class="form-select" name="nit" aria-label="Default select example">
      <?php 
            $query = "SELECT NIT FROM restaurantes";
            $result_clientes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_clientes)){ ?>
                <option value="<?php echo $row['NIT']?>"><?php echo $row['NIT']?></option>
            <?php } ?>
      </select>
    </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4" name="saveProducto" value="SaveProducto">Guardar Información</button>
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
