<?php
    include("db.php");
    if(isset($_GET['IDProducto'])){
        $IDProducto = $_GET['IDProducto'];
        $_SESSION['messageProducto'] = $IDProducto;
        $query2 = "SELECT * FROM productos WHERE IDProducto = $IDProducto";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) == 1){
            $row = mysqli_fetch_array($result2);
            $Nombre = $row['Nombre'];
            $Descripcion = $row['Descripcion'];
            $Precio = $row['Precio'];
            $Foto = $row['Foto'];
        }

        
    }
    
?>
<?php include("includes/headerCliente.php") ?>
<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php  } ?>
<div style="position: absolute; left: 280px; top: 150px; height: 400px; width: 700px; padding: 1em;">
<h1> Ingrese la dirección de envío </h1>
</div>
<div style="position: absolute; left: 280px; top: 210px; height: 400px; width: 700px; padding: 1em;">

<div class="row">

<div class="card card-body">
<form action="save.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="number" name="carrera"  class="form-control" autofocus>
        <label class="form-label">Carrera/Avenida</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="number" name="calle" class="form-control" />
    <label class="form-label" for="form6Example3">Calle</label>
  </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
    <input type="number" name="residencia" class="form-control" />
    <label class="form-label" for="form6Example4">Número de residencia.</label>
  </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
    <input type="text" name="nombreRecibe" class="form-control" />
    <label class="form-label" for="form6Example4">¿Quién recibe?</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4" name="saveDireccion" value="SaveDireccion">Pedir</button>
</form>
</div>
</div>
</div>



<div style="position: absolute; left: 1200px; top: 100px; height: 400px; width: 100px; padding: 1em;">
<h1> Producto seleccionado: </h1>
</div>
  <main>
    <div class="container"  style="position: absolute; left: 1200px; top: 240px;">

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">       
        
        <!--Main layout-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
              <img 
                src="<?php echo $Foto?>"
                class = "card-img-top"
                height="230"
                alt=""
              >
                  <div class="mask rgba-white-slight"></div>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a class="text-dark">
                  <h5><?php echo $Nombre?></h5>
                </a>
                <h5>
                  <strong>
                    <a class="text-dark">
                        <?php echo $Descripcion?>
                    </a>
                  </strong>
                </h5>

                <h4 class="text-warning">
                  <strong>$<?php echo $Precio?></strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->


            
            </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->
    </div>
  </main>
  <!--Main layout-->

    <div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>