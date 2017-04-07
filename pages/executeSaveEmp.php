<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

if(empty($unitiGasa)){
    $unitiGasa='';
}
if(empty($priceGasa)){
    $priceGasa='';
}
if(empty($unitiJayor)){
    $unitiJayor='';
}
if(empty($priceJayor)){
    $priceJayor='';
}
$valores->saveEmployee($claveCbb, $descripcion, $unitiJayor, $priceJayor, $unitiGasa, $priceGasa);
  
?>


