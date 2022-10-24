<?php

    include("db.php");
    
    if(isset($_GET['NIT'])){
        $NIT = $_GET['NIT'];
        $query = "DELETE FROM restaurantes WHERE NIT = $NIT";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Restaurante removido satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: restaurantes.php");
    }

?>