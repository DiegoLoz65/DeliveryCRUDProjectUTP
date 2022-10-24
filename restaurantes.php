<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>
<h1> Restaurantes registrados en Delivery.</h1>

<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>

    <div class="col-md-3">
        <a href="newRestaurante.php">
        <button type="button" class="btn btn-dark" > Crear </button>
        </a>
    </div>
    
<div class="border d-flex align-items-center justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">NIT</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM restaurantes";
            $result_restaurantes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_restaurantes)){ ?>
                <tr>
                    <td><?php echo $row['NIT']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Direccion']?></td>
                    <td><?php echo $row['Telefono']?></td>
                    <td>
                        <a href="editRestaurante.php?NIT=<?php echo $row['NIT']?>" class="btn btn-dark">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="deleteRestaurante.php?NIT=<?php echo $row['NIT']?>" class="btn btn-dark">
                            <i class="fas fa-user-minus"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>