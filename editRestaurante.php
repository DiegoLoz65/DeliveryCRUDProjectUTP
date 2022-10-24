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
            $LogoRest = $row['Logo'];
        }
    }
    
    if(isset($_POST['editarRestaurante'])){
        $NIT = $_GET['NIT'];
        $NombreRest = $_POST['nombreRest'];
        $DireccionRest = $_POST['direccionRest'];
        $TelefonoRest = $_POST['telefonoRest'];
        $LogoRest = $_POST['logoRest'];

        $query2 = "UPDATE restaurantes set Nombre = '$NombreRest', Direccion = '$DireccionRest', Telefono = '$TelefonoRest', Logo = '$LogoRest' WHERE NIT = $NIT";
        mysqli_query($conn, $query2);
        $_SESSION['message'] = 'Restaurante editado satisfactoriamente';
        $_SESSION['message_type'] = 'success';
        header("Location: restaurantes.php");
    }
?>

<div style="position: absolute; left: 170px; top: 130px; height: 400px; width: 700px; padding: 1em;">
<h1> Editar Restaurante </h1>
</div>

<?php include("includes/header.php")?>
<div style="position: absolute; left: 160px; top: 220px; height: 400px; width: 700px; padding: 1em;">
    <div class="card card-body">
    <form action="editRestaurante.php?NIT=<?php echo $_GET['NIT']; ?>" method="POST">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input type="text" name="nombreRest" value="<?php echo $NombreRest; ?>" placeholder="Actualiza Nombre" class="form-control">
            <label class="form-label">Nombre</label>
        </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="telefonoRest" value="<?php echo $TelefonoRest; ?>" class="form-control" />
        <label class="form-label" for="form6Example4">Telefono</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="direccionRest" value="<?php echo $DireccionRest; ?>" class="form-control" />
        <label class="form-label" for="form6Example5">Dirección</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="logoRest" value="<?php echo $LogoRest; ?>" class="form-control" />
        <label class="form-label" for="form6Example5">Logo</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-dark btn-block mb-4" name="editarRestaurante">Actualizar</button>
    </form>
    </div>
</div>

<div style="position: absolute; left: 920px; top: 100px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/2544829/pexels-photo-2544829.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>

<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>