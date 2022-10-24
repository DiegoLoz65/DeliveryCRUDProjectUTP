<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>
<h1> Clientes registrados en Delivery.</h1>
<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>
    

    <div class="d-flex align-items-start bg-light mb-3" style="height: 50px;">
    <div class="col"></div>
    <div class="col">
    <a href="new.php"> 
        <button type="button" class="btn btn-dark" > Crear </button>
        </a>
        <a href="clientesOrdenados.php"> 
        <button type="button" class="btn btn-dark" > Ordenar Alfabeticamente </button>
        </a>
        <a href="clienteAntiguo.php"> 
        <button type="button" class="btn btn-dark" > Cliente más antiguo </button>
        </a>
    </div>
    <div class="col"></div>
    </div>

<div class="border d-flex align-items-center justify-content-center">
    

    <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Numero</th>
            <th scope="col">Edad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM clientes";
            $result_clientes = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_clientes)){ ?>
                <tr>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Apellido']?></td>
                    <td><?php echo $row['Numero_Cel']?></td>
                    <td><?php echo $row['Edad']?></td>
                    <td><?php echo $row['Direccion']?></td>
                    <td><?php echo $row['Fecha_Registro']?></td>
                    <td>
                        <a href="edit.php?Numero_Cel=<?php echo $row['Numero_Cel']?>" class="btn btn-dark">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="delete.php?Numero_Cel=<?php echo $row['Numero_Cel']?>" class="btn btn-dark">
                            <i class="fas fa-user-minus"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>






