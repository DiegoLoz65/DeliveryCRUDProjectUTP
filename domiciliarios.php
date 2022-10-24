<?php include("db.php") ?> <!--Se inicializa la base de date_parse_from_format -->
<?php include("includes/header.php") ?>
<h1> Domiciliarios registrados en Delivery.</h1>
<?php
    if(isset($_SESSION['message'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); } ?>
    
    <div class="col-md-3">
        <a href="newDomiciliario.php"> 
        <button type="button" class="btn btn-dark" > Crear </button>
        </a>
        
    </div>

<div class="border d-flex align-items-center justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Numero</th>
            <th scope="col">Medio de Trasnporte</th>
            <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM domiciliarios";
            $result_domiciliarios = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_domiciliarios)){ ?>
                <tr>
                    <td><?php echo $row['DNI']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Apellido']?></td>
                    <td><?php echo $row['Numero_Cel']?></td>
                    <td><?php echo $row['Transporte']?></td>
                    <td>
                        <a href="editDomiciliario.php?DNI=<?php echo $row['DNI']?>" class="btn btn-dark">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="deleteDomiciliario.php?DNI=<?php echo $row['DNI']?>" class="btn btn-dark">
                            <i class="fas fa-user-minus"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>