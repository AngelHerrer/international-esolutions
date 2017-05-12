<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
echo $claveCbb . '<br>' . $descripcion . '<br>' . $marca . '<br>' . $empresa . '<br>' . $precio . '<br>' . $preciou . '<br>' . $preciov . '<br>' . $grcn . '<br>' . $presentacion . '<br>' . $porigen . '<br>' . $fechve . '<br>' . $obse . '<br>' . $rsani . '<br>' . $catft;
die();
//$fichas = '/registros';
//$sanitarios = './sanitario/'.$claveCbb.'/';

//mkdir($fichas, 0777, true);
//
//mkdir($sanitarios, 0777, true);

//file_put_contents($rsani,$fichas);
//
//file_put_contents($catft,$fichas);

$archivopdf = $_FILES['rsani']['name'];
$archivo2pdf = $claveCbb.'s.pdf';
$url = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],'/international-esolutions/pages/sanitario/'.$archivo2pdf );

$target_path2 = 'sanitario/';
$target_path2 = $target_path2 . basename( $archivo2pdf);
var_dump($target_path2);
if(move_uploaded_file($_FILES['rsani']['tmp_name'], $target_path2)) {
    echo 'se subio sanitario';
} else{
    echo 'no subio sanitario';
}

//$archivo = $_FILES['rsani']['name'];
//$archivo2 = $claveCbb.'s.pdf';
$archivo = $_FILES['catft']['name'];
$archivo2 = $claveCbb.'f.pdf';
$url2 = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],'/international-esolutions/pages/fichas/'.$archivo2 );
$target_path = 'fichas/';
$target_path = $target_path . basename( $archivo2);
var_dump($target_path);
if(move_uploaded_file($_FILES['catft']['tmp_name'], $target_path)) {
    echo 'si subio las fichas';
} else{
    echo 'no subio las fichas';
}

$valores->saveEmployee($claveCbb, $descripcion, $marca, $empresa, $precio, $preciou, $preciov, $grcn, $presentacion, $porigen, $fechve, $obse, $url, $url2);
?>


