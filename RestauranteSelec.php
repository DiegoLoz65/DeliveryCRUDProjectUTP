<?php
    include("db.php");
    if(isset($_GET['NIT'])){
        $NIT = $_GET['NIT'];
        $query2 = "SELECT * FROM restaurantes WHERE NIT = $NIT";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) == 1){
            $row = mysqli_fetch_array($result2);
            $NIT = $row['NIT'];
            $NombreRest = $row['Nombre'];
            $DireccionRest = $row['Direccion'];
            $TelefonoRest = $row['Telefono'];
        }

        
    }
    
?>
<?php include("includes/headerCliente.php") ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
      h1 {
        font-family: 'Bebas Neue', cursive;
        color: #000000;
        text-align: center;
        font-size: 90px;
      }
    </style>
<div style="position: absolute; left: 200px; top: 110px; height: 400px; width: 1500px; padding: 1em;">
<h1> Productos ofrecidos por <?php echo $NombreRest?></h1>
</div>

<main>
    <div class="container"  style="position: absolute; left: 300px; top: 200px;">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        
      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">       
        
        <?php 
            $query3 = "SELECT * FROM productos WHERE NITRestaurante = $NIT";
            $result_clientes = mysqli_query($conn, $query3);
            while($row = mysqli_fetch_array($result_clientes)){ ?>
                        <!--Main layout-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
              <img 
                src="<?php echo $row['Foto']?>"
                class = "card-img-top"
                height="230"
                alt=""
              >
                <a href="ProductoSelect.php?IDProducto=<?php echo $row['IDProducto']?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a class="text-dark">
                  <h5><?php echo $row['Nombre']?></h5>
                </a>
                <h5>
                  <strong>
                    <a class="text-dark">
                        <?php echo $row['Descripcion']?>
                    </a>
                  </strong>
                </h5>

                <h4 class="text-warning">
                  <strong>$<?php echo $row['Precio']?></strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->


            <?php } ?>
            </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->
    </div>
  </main>
  <!--Main layout-->



