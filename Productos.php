<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>
<h1> Productos registrados en Delivery.</h1>

<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>

    <div class="col-md-3">
        <a href="newProducto.php">
        <button type="button" class="btn btn-dark" > Crear </button>
        </a>
    </div>
    
<div class="border d-flex align-items-center justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">IDProducto</th>
            <th scope="col">NITRestaurante</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Foto</th>
            <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM productos";
            $result_restaurantes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_restaurantes)){ ?>
                <tr>
                    <td valign="middle"><?php echo $row['IDProducto']?></td>
                    <td valign="middle"><?php echo $row['NITRestaurante']?></td>
                    <td valign="middle"><?php echo $row['Nombre']?></td>
                    <td valign="middle"><?php echo $row['Precio']?></td>
                    <td valign="middle">
                    <img src="<?php echo $row['Foto']?>" height="100" alt="">
                    </td>
                    <td valign="middle">
                        <a href="editProducto.php?IDProducto=<?php echo $row['IDProducto']?>" class="btn btn-dark">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="deleteProducto.php?IDProducto=<?php echo $row['IDProducto']?>" class="btn btn-dark">
                            <i class="fas fa-user-minus"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>