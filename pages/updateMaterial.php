<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
$valores->updateMaterial($claveCbb, $descripcion, $marca, $empresa, $precio, $preciou, $preciov, $grcn, $presentacion, $porigen, $fechve, $obse);
echo "<script>window.location.href='index.php?edit=si';</script>"; 
?>

