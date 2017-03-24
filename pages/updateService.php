<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * act_servicio
 * tel1_emp
 * id_ser
 */
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

echo $id_ser.'<br>'.$tel1_ser.'<br>'.$act_servicio;

if($valores->updateServ($id_ser, $tel1_ser, $act_servicio)){
    
     echo '<script type="text/javascript">';
        echo 'window.location.href="addService.php?update=ok";';
        echo '</script>';
}
