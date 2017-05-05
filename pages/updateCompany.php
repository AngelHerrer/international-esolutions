
<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

$valores->updateCompany($telCompany, $mailCompany, $rfcCompany, $dirCompany, $cuentaCompany, $bancoCompany, $contactCompany, $idCompany);
echo "<script>window.location.href='index.php?edit=si';</script>"; 
?>
