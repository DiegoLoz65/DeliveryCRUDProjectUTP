<?php

    include("db.php");
    if(isset($_GET['DNI'])){
        $DNI = $_GET['DNI'];
        $query = "SELECT * FROM domiciliarios WHERE DNI = $DNI";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $DNI = $row['DNI'];
            $Nombre = $row['Nombre'];
            $Apellido = $row['Apellido'];
            $Numero_Cel = $row['Numero_Cel'];
            $Transporte = $row['Transporte'];
        }
    }
    
    if(isset($_POST['editarDomiciliario'])){
        $DNI = $_GET['DNI'];
        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Numero_Cel = $_POST['numero'];
        $Transporte = $_POST['transporte'];

        $query = "UPDATE domiciliarios set Nombre = '$Nombre', Apellido = '$Apellido', Numero_Cel = '$Numero_Cel', Transporte = '$Transporte' WHERE DNI = $DNI";
        mysqli_query($conn, $query);
        header("Location: domiciliarios.php");
    }


?>


<?php include("includes/header.php")?>

<div style="position: absolute; left: 200px; top: 130px; height: 400px; width: 700px; padding: 1em;">
<h1> Editar Domiciliario </h1>
</div>

<div style="position: absolute; left: 190px; top: 220px; height: 400px; width: 700px; padding: 1em;">
    <div class="card card-body">
    <form action="editDomiciliario.php?DNI=<?php echo $_GET['DNI']; ?>" method="POST">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input type="text" name="nombre" value="<?php echo $Nombre; ?>" placeholder="Actualiza Nombre" class="form-control">
            <label class="form-label">Nombre</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input type="text" name="apellido" value="<?php echo $Apellido; ?>" class="form-control" />
            <label class="form-label" for="form6Example2">Apellido</label>
        </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="numero" value="<?php echo $Numero_Cel; ?>" class="form-control" />
        <label class="form-label" for="form6Example4">Número de Celular</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="transporte" value="<?php echo $Transporte; ?>" class="form-control" />
        <label class="form-label" for="form6Example5">Medio de Transporte</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-dark btn-block mb-4" name="editarDomiciliario">Actualizar</button>
    </form>
    </div>
</div>

<div style="position: absolute; left: 970px; top: 100px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/4393533/pexels-photo-4393533.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>

<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>