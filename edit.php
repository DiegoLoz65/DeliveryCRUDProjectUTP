<?php

    include("db.php");
    if(isset($_GET['Numero_Cel'])){
        $Numero_Cel = $_GET['Numero_Cel'];
        $query = "SELECT * FROM clientes WHERE Numero_Cel = $Numero_Cel";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $Nombre = $row['Nombre'];
            $Apellido = $row['Apellido'];
            $Numero_Cel = $row['Numero_Cel'];
            $Edad = $row['Edad'];
            $Direccion = $row['Direccion'];
            $Fecha_Registro = $row['Fecha_Registro'];
            $Contrasena = $row['Contrasena'];
        }
    }
    
    if(isset($_POST['editar'])){
        $Numero_Cel = $_GET['Numero_Cel'];
        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Edad = $_POST['edad'];
        $Direccion = $_POST['direccion'];
        $Contrasena = $_POST['contrasena'];

        $query = "UPDATE clientes set Nombre = '$Nombre', Apellido = '$Apellido', Numero_Cel = '$Numero_Cel', Edad = '$Edad', Direccion = '$Direccion', Contrasena = '$Contrasena' WHERE Numero_Cel = $Numero_Cel";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Cliente editado satisfactoriamente';
        $_SESSION['message_type'] = 'success';
        header("Location: clientes.php");
    }


?>


<?php include("includes/header.php")?>

<div style="position: absolute; left: 330px; top: 130px; height: 400px; width: 700px; padding: 1em;">
<h1> Editar Cliente </h1>
</div>

<div style="position: absolute; left: 320px; top: 220px; height: 400px; width: 700px; padding: 1em;">
    <div class="card card-body">
        <form action="edit.php?Numero_Cel=<?php echo $_GET['Numero_Cel']; ?>" method="POST">
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
                <input type="text" name="edad" value="<?php echo $Edad; ?>" class="form-control" />
                <label class="form-label" for="form6Example4">Edad</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="direccion" value="<?php echo $Direccion; ?>" class="form-control" />
                <label class="form-label" for="form6Example5">Dirección</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="contrasena" value="<?php echo $Contrasena; ?>" class="form-control" />
                <label class="form-label" for="form6Example5">Contraseña</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-dark btn-block mb-4" name="editar">Actualizar</button>
        </form>
    </div>
</div>

<div style="position: absolute; left: 1100px; top: 100px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/1814395/pexels-photo-1814395.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>


<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>