<?php

include("db.php");
 // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
 $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
 
if (isset($_POST['save'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero = $_POST['numero'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];
    
    $query = "INSERT INTO clientes(Nombre, Apellido, Numero_Cel, Edad, Direccion, Contrasena) VALUES ('$nombre', '$apellido', '$numero', '$edad', '$direccion', '$contrasena')";

    $result = mysqli_query($conn, $query); 
    if(!$result){
        die("Query Failed1");
    }

    $_SESSION['message'] = 'Cliente guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: clientes.php");
}

if (isset($_POST['saveRestaurante'])){
    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $logo = $_POST['logo'];
    
    $query = "INSERT INTO restaurantes(NIT, Nombre, Direccion, Telefono, Logo) VALUES ('$nit', '$nombre', '$direccion', '$telefono', '$logo')";

    $result = mysqli_query($conn, $query); 
    if(!$result){
        die("Query Failed2");
    }

    $_SESSION['message'] = 'Restaurante guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: restaurantes.php");
}

if (isset($_POST['saveDomiciliario'])){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero = $_POST['numero'];
    $transporte = $_POST['transporte'];
    if($transporte == "Medio de Transporte"){
        $_SESSION['message'] = 'Seleccione un Medio de Transporte';
        $_SESSION['message_type'] = 'danger';
        header("Location: newDomiciliario.php");
        die();
    }
    
    
    $query = "INSERT INTO domiciliarios(DNI, Nombre, Apellido, Numero_Cel, Transporte) VALUES ('$dni', '$nombre', '$apellido', '$numero', '$transporte')";

    $result = mysqli_query($conn, $query); 
    if(!$result){
        die("Query Failed3");
    }

    $_SESSION['message'] = 'Domiciliario guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: domiciliarios.php");
}

if (isset($_POST['newClient'])){
    
    if(preg_match($patron_texto, $_POST['nombre']) ){
        $nombre = $_POST['nombre'];
    }else{
        $_SESSION['message'] = 'Ingrese un nombre con caracteres válidos';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }
    
    if(preg_match($patron_texto, $_POST['apellido']) ){
        $apellido = $_POST['apellido'];
    }else{
        $_SESSION['message'] = 'Ingrese un apellido con caracteres válidos';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    if(is_numeric($_POST['numero'])){
        $numero = $_POST['numero'];
    }else{
        $_SESSION['message'] = 'Ingrese un numero con caracteres válidos';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    if(is_numeric($_POST['edad'])){
        if((18 < $_POST['edad'])&&($_POST['edad']<100)){
            $edad = $_POST['edad'];
        }
        else{
        $_SESSION['message'] = 'Ingrese una edad válida';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die(); 
        }
    }else{
        $_SESSION['message'] = 'Ingrese una edad válida';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];
    
    $query = "INSERT INTO clientes(Nombre, Apellido, Numero_Cel, Edad, Direccion, Contrasena) VALUES ('$nombre', '$apellido', '$numero', '$edad', '$direccion', '$contrasena')";

    $result = mysqli_query($conn, $query);
     
    if(!$result){
        $_SESSION['message'] = 'Ese número de celular ya está registrado, pueba con otro.';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    $_SESSION['message'] = 'Cliente registrado con éxito';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

if (isset($_POST['login'])){
    $numero = $_POST['numero'];
    $contrasena = $_POST['contrasena'];
    
    $query = "SELECT * FROM clientes WHERE Numero_Cel = '{$numero}' AND Contrasena = '{$contrasena}'";
    $result = mysqli_query($conn, $query); 
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt == 0){
        $_SESSION['message'] = 'Las credenciales no coinciden, intenta nuevamente.';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    $_SESSION['messageCliente'] = $numero;
    $_SESSION['message_type'] = 'success';
    header("Location: PrincipalCliente.php");
}

if (isset($_POST['loginAdmin'])){
    $numero = $_POST['numero'];
    $contrasena = $_POST['contrasena'];
    
    $query = "SELECT * FROM admins WHERE Numero_Cel = '{$numero}' AND Contrasena = '{$contrasena}'";
    $result = mysqli_query($conn, $query); 
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt == 0){
        $_SESSION['message'] = 'El administrador no está registardo';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
        die();
    }

    header("Location: index2.php");
}

if (isset($_POST['saveProducto'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $foto = $_POST['foto'];
    $nit = $_POST['nit'];
    
    $query = "INSERT INTO productos(IDProducto, NITRestaurante, Nombre, Descripcion, Precio, Foto) VALUES ('$id', '$nit', '$nombre', '$descripcion', '$precio', '$foto')";

    $result = mysqli_query($conn, $query); 
    if(!$result){
        die("Query Failed5");
    }

    $_SESSION['message'] = 'Producto guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: Productos.php");
}

if (isset($_POST['saveDireccion'])){
    session_start();
    if (isset($_SESSION['messageProducto'])) {
        //asignar a variable
        $producto = $_SESSION['messageProducto'];
        //asegurar que no tenga "", <, > o &
        $id = htmlspecialchars($producto); 
    }
    if(preg_match($patron_texto, $_POST['nombreRecibe']) ){
        $nombreRecibe = $_POST['nombreRecibe'];
    }else{
        $_SESSION['message'] = 'Ingrese un nombre con caracteres válidos';
        $_SESSION['message_type'] = 'danger';
        header("Location: PasarelaDireccion.php?IDProducto=$producto");
        die();
    }



    session_start();
    if (isset($_SESSION['messageCliente'])) {
        //asignar a variable
        $cliente = $_SESSION['messageCliente'];
        //asegurar que no tenga "", <, > o &
        $numero = htmlspecialchars($cliente); 
    }
    session_start();
    if (isset($_SESSION['messageProducto'])) {
        //asignar a variable
        $producto = $_SESSION['messageProducto'];
        //asegurar que no tenga "", <, > o &
        $id = htmlspecialchars($producto); 
    }
    $carrera = $_POST['carrera'];
    $calle = $_POST['calle'];
    $residencia = $_POST['residencia'];
    
    $query = "INSERT INTO pedidos(NumeroCliente, IDProducto, Carrera, Calle, Residencia, NombreRecibe) VALUES ('$numero', '$id', '$carrera', '$calle', '$residencia', '$nombreRecibe')";

    $result = mysqli_query($conn, $query); 
    if(!$result){
        die("Fallo de pedido");
    }

    header("Location: ProductoEnviado.php");
}
?>

  <?php
    if(isset($_SESSION['messageCliente'])){ ?>

    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['messageCliente']?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php } ?>