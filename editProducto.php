<?php

    include("db.php");
    if(isset($_GET['IDProducto'])){
        $IDProducto = $_GET['IDProducto'];
        $query = "SELECT * FROM productos WHERE IDProducto = $IDProducto";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $IDProducto = $row['IDProducto'];
            $NITRestaurante = $row['NITRestaurante'];
            $Nombre = $row['Nombre'];
            $Descripcion = $row['Descripcion'];
            $Precio = $row['Precio'];
            $Foto = $row['Foto'];
        }
    }
    
    if(isset($_POST['editarProducto'])){
        $IDProducto = $_GET['IDProducto'];
        $NITRestaurante = $_GET['NITRestaurante'];
        $Nombre = $_POST['nombre'];
        $Descripcion = $_POST['descripcion'];
        $Precio = $_POST['precio'];
        $Foto = $_POST['foto'];

        $query = "UPDATE productos set Nombre = '$Nombre', Descripcion = '$Descripcion', Precio = '$Precio', Foto = '$Foto' WHERE IDProducto = $IDProducto";
        mysqli_query($conn, $query);
        header("Location: productos.php");
    }


?>


<?php include("includes/header.php")?>

<div style="position: absolute; left: 200px; top: 130px; height: 400px; width: 700px; padding: 1em;">
<h1> Editar Producto </h1>
</div>

<div style="position: absolute; left: 190px; top: 220px; height: 400px; width: 700px; padding: 1em;">
    <div class="card card-body">
    <form action="editProducto.php?IDProducto=<?php echo $_GET['IDProducto']; ?>" method="POST">
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
            <input type="text" name="descripcion" value="<?php echo $Descripcion; ?>" class="form-control" />
            <label class="form-label" for="form6Example2">Descripción</label>
        </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="precio" value="<?php echo $Precio; ?>" class="form-control" />
        <label class="form-label" for="form6Example4">Precio</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="foto" value="<?php echo $Foto; ?>" class="form-control" />
        <label class="form-label" for="form6Example5">Foto</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-dark btn-block mb-4" name="editarProducto">Actualizar</button>
    </form>
    </div>
</div>

<div style="position: absolute; left: 970px; top: 100px;  padding: 1em;">
<img 
        src="https://images.pexels.com/photos/375467/pexels-photo-375467.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
        height="500"
        alt=""
        loading="lazy"
        class="img rounded"
/>
</div>

<div style="position: relative;  top: 600px;">
<?php include("includes/footer.php") ?>
</div>