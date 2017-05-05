<?php

error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
$valores->saveCompany($nameComp, $telComp, $mailComp, $rfcComp, $dirComp, $cuentComp, $bancoComp, $contactComp);


