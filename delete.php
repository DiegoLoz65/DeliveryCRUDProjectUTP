<?php

    include("db.php");
    
    if(isset($_GET['Numero_Cel'])){
        $Numero_Cel = $_GET['Numero_Cel'];
        $query = "DELETE FROM clientes WHERE Numero_Cel = $Numero_Cel";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Cliente removido satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: clientes.php");
    }

?>