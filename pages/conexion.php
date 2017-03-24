<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

    if (!$liga = mysqli_connect($servidor,$usuario,$password)) {
        echo "No se encuentra el Servidor";
        
    }
    else {

        if (!mysqli_select_db($liga,"prisma_test")) {
            
            echo "No se encuentra la Base de datos";
            
        }
        
        else {
            
            //echo 'conectado';
            
        }
        
        
    }


?>

