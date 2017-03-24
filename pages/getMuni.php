<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
$id = $_POST["idmarca"];
if(isset($_POST["idmarca"]))
	{
                
		$valores->getMuni($id);
	}
?>
