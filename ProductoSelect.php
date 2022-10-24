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


  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="<?php echo $Foto?>"  style="border-radius: 12px;"  class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a >
                <span class="badge bg-primary">Excelente Categoría</span>
              </a>
              <a >
                <span class="badge bg-secondary">Nuevo</span>
              </a>
              <a >
                <span class="badge bg-danger">Más Vendido</span>
              </a>
            </div>
            <h1>
            <strong><?php echo $Nombre?></strong>
            </h1>
            <p class="lead">
              <span class="mr-1">
                <del>$<?php echo $Precio + 5000?></del>
              </span>
              <span>$<?php echo $Precio?></span>
            </p>

            <p class="lead font-weight-bold">Descripción</p>

            <p><?php echo $Descripcion?></p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
                <a href="PasarelaDireccion.php?IDProducto=<?php echo $row['IDProducto']?>" class="btn btn-dark btn-md my-0 p">Realizar Pedido
                  <i class="fas fa-shopping-cart ml-1"></i>
                </a>
            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      

    </div>
  </main>
  <!--Main layout-->

  <div style="position: relative;  top: 65px;">
<?php include("includes/footer.php") ?>
</div>

