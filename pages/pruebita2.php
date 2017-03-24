<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
extract($_REQUEST);


session_start();
echo $gclsrc;
if (!empty($gclsrc)){
    
$palabra = $_SESSION["word"]=$gclsrc;
    
}else{
 $palabra =$_SESSION["word"] = 'null';
}

echo $palabra;
?>
<a href="pruebitas3.php">url</a>