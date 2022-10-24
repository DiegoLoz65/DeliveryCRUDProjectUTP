<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>
<h1> Restaurantes registrados en Delivery.</h1>

<div class="border d-flex align-items-center justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Número del Cliente</th>
            <th scope="col">Código del Producto</th>
            <th scope="col">Dirección</th>
            <th scope="col">¿Quién recibe?</th>
            <th scope="col">Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM pedidos";
            $result_restaurantes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_restaurantes)){ ?>
                <tr>
                    <td><?php echo $row['NumeroCliente']?></td>
                    <td><?php echo $row['IDProducto']?></td>
                    <td>Cra <?php echo $row['Carrera']?> N <?php echo $row['Calle']?> - <?php echo $row['Residencia']?></td>
                    <td><?php echo $row['NombreRecibe']?></td>
                    <td><?php echo $row['Fecha']?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>