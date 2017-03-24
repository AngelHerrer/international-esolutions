<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
if($valores->saveService($nameSer, $zonaSer, $tel_1Ser)){
//    header("Location:addService.php?succes=ok");        
    echo '<script type="text/javascript">';
        echo 'window.location.href="addService.php?succes=ok";';
        echo '</script>';
}
?>

