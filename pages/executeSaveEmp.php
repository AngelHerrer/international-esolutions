<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
echo $claveCbb.'<br>'.$descripcion.'<br>'.$marca.'<br>'.$empresa.'<br>'.$precio.'<br>'.$preciou.'<br>'.$preciov.'<br>'.$grcn.'<br>'.$presentacion.'<br>'.$porigen.'<br>'.$fechve.'<br>'.$obse.'<br>'.$rsani.'<br>'.$catft;
die();
$valores->saveEmployee($claveCbb, $descripcion, $marca, $empresa, $precio, $preciou,$preciov,$grcn,$presentacion,$porigen,$fechve,$obse,$rsani,$catft);
  
?>


