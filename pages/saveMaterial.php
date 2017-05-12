<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
echo $claveCbb . '<br>' . $descripcion . '<br>' . $marca . '<br>' . $empresa . '<br>' . $precio . '<br>' . $preciou . '<br>' . $preciov . '<br>' . $grcn . '<br>' . $presentacion . '<br>' . $porigen . '<br>' . $fechve . '<br>' . $obse . '<br>' . $rsani . '<br>' . $catft;

$dir_destino = "sanitario/";
        $url = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],':8081/loginForm/form3/imagenes/'.$_FILES['foto']['name'] );
        $imagen_subida = $dir_destino . $_FILES['rsani']['name'];
        if(!is_writable($dir_destino)){
	echo "no tiene permisos";
        }else{
	if(is_uploaded_file($_FILES['rsani']['tmp_name'])){
		/*echo "Archivo ". $_FILES['foto']['name'] ." subido con éxtio.\n";
		echo "Mostrar contenido\n";
		echo $imagen_subida;*/
		if (move_uploaded_file($_FILES['rsani']['tmp_name'], $imagen_subida)) {
			
			//Creamos nuestra consulta sql
			
			echo "El archivo es fue cargado exitosamente.\n";
			
			
                        
		} else {
			echo "Posible ataque de carga de archivos!\n";
		}
	}else{
		echo "Posible ataque del archivo subido: ";
		echo "nombre del archivo '". $_FILES['rsani']['tmp_name'] . "'.";
	}
}       
//$valores->saveEmployee($claveCbb, $descripcion, $marca, $empresa, $precio, $preciou, $preciov, $grcn, $presentacion, $porigen, $fechve, $obse, $url, $url2);
?>



