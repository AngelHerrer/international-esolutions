<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
//$valores->desc_mat($id_mat);
list($claveCbb,$descripcion,$marca,$empresa,$precio,$preciou,$preciov,$grcn,$presentacion,$porigen,$fechve,$obse,$rsani,$catft)=$valores->desc_mat($id_mat);
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#myBtn {
    width: 300px;
    padding: 10px;
    font-size:20px;
    position: absolute;
    margin: 0 auto;
    right: 0;
    left: 0;
    bottom: 50px;
    z-index: 9999;
}
</style>
<body>

<div class="container">
  

  <!-- Modal -->
  <form action="updateMaterial.php" method="post">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $descripcion; ?></h4>
        </div>
        <div class="modal-body">
            <label>MARCA:</label>
            <input class="form-control" name="marca" value="<?php echo $marca; ?>">
            
            <label>EMPRESA:</label>
            <input class="form-control" name="empresa" value="<?php echo $empresa ?>">
            
            <label>PRECIO:</label>
            <input class="form-control" name="precio" value="<?php echo $precio ?>">
            
            <label>PRECIO UNITARIO:</label>
            <input class="form-control" name="preciou" value="<?php echo $preciou ?>">
            
            <label>PRECIO VENTA:</label>
            <input class="form-control" name="preciov" value="<?php echo $preciov ?>">
            
            <label>GRADO CONTENIDO NACIONAL:</label>
            <input class="form-control" name="grcn" value="<?php echo $grcn ?>">
            
            <label>PRESENTACIÓN:</label>
            <input class="form-control" name="presentacion" value="<?php echo $presentacion ?>">
            
            <label>PAIS DE ORIGEN:</label>
            <input class="form-control" name="porigen" value="<?php echo $porigen ?>">
            
            <label>FECHA DE VENCIMIENTO:</label>
            <input class="form-control" name="fechve" value="<?php echo $fechve ?>">
            
            <label>OBSERVACIONES:</label>
            <input class="form-control" name="obse" value="<?php echo $obse ?>">
            
            
            <input type="button" style="margin-top: 20px;background-color: red;color: #ffffff;" class="btn btn-default" name="" value="CATALOGO FICHA TECNICA">
            
            
            <input style="margin-top: 20px;background-color: #31b131;color:#ffffff;" class="btn btn-default" type="button"  name="" value="REGISTRO SANITARIO">
            
            <input style="margin-top: 100px;background-color: #2aabd2; color: #ffffff;margin-left: 94px;" class="btn btn-default" type="submit"  name="" value="EDITAR">
            
            <input type="hidden" name="claveCbb" value="<?php echo $id_mat; ?>">
            
        </div>
      </div>
      
    </div>
  </div>
      </form>
</div>
 
<script>
$(document).ready(function(){
    // Show the Modal on load
    $("#myModal").modal("show");
    
    // Hide the Modal
    $("#myBtn").click(function(){
        $("#myModal").modal("hide");
    });
});
</script>

</body>
</html>