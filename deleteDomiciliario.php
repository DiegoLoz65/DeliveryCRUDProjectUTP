<?php

    include("db.php");
    
    if(isset($_GET['DNI'])){
        $DNI = $_GET['DNI'];
        $query = "DELETE FROM domiciliarios WHERE DNI = $DNI";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Domiciliario removido satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: domiciliarios.php");
    }

?>