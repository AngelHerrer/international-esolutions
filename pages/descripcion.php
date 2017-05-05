<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
$valores->desc_mat($id_mat);
?>
<!DOCTYPE html>
<!--
## $id_mat URL
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //echo $id_mat;
        ?>
    </body>
</html>
