<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->

<?php include("includes/headerCliente.php") ?>
        
<div style="position: absolute; left: 250px; top: 110px; height: 400px; width: 1300px; padding: 1em;">
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
<h1> ¡Restaurantes Disponibles en Delivery! </h1>
</div>

<main>
    <div class="container" style="position: absolute; left: 300px; top: 200px;">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        
      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">       
        
        <?php 
            $query = "SELECT * FROM restaurantes";
            $result_clientes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_clientes)){ ?>
                        <!--Main layout-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="<?php echo $row['Logo']?>" class="card-img-top" alt="">
                <a href="RestauranteSelec.php?NIT=<?php echo $row['NIT']?>">
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
                        <?php echo $row['Direccion']?>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong><?php echo $row['Telefono']?></strong>
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

