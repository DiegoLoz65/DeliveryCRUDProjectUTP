<?php

    include("db.php");
    
    if(isset($_GET['IDProducto'])){
        $IDProducto = $_GET['IDProducto'];
        $query = "DELETE FROM productos WHERE IDProducto = $IDProducto";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Producto removido satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: productos.php");
    }

?>