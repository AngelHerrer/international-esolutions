<?php

$servidor = "localhost";
$usuario = "root";
$password = "sp.0?sdv&721!q-";

    if (!$liga = mysqli_connect($servidor,$usuario,$password)) {
        echo "No se encuentra el Servidor";
        
    }
    else {

        if (!mysqli_select_db($liga,"IESolutions")) {
            
            echo "No se encuentra la Base de datos";
            
        }
        
        else {
            
            //echo 'conectado';
            
        }
        
        
    }


?>

