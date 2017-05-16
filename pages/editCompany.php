<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
list($nameCompany,$telCompany,$mailCompany,$rfcCompany,$dirCompany,$cuentaCompany,$bancoCompany,$contactCompany,$idCompany)=$valores->getCompany($id_comp);

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
  
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <form action="updateCompany.php" method="post">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $nameCompany; ?></h4>
        </div>
        <div class="modal-body">
            
            <label>TELEFONO:</label>
            <input class="form-control" type="number" name="telCompany" value="<?php echo $telCompany; ?>">
            
            <label>CORREO:</label>
            <input class="form-control" type="email" name="mailCompany" value="<?php echo $mailCompany; ?>">
            
            <label>RFC:</label>
            <input class="form-control" type="text" name="rfcCompany" value="<?php echo $rfcCompany; ?>">
            
            <label>DIRECCIÓN:</label>
            <input class="form-control" type="text" name="dirCompany" value="<?php echo $dirCompany; ?>">
            
            <label>CUENTA:</label>
            <input class="form-control" type="number" name="cuentaCompany" value="<?php echo $cuentaCompany; ?>">
            
            <label>BANCO:</label>
            <input class="form-control" type="text" name="bancoCompany" value="<?php echo $bancoCompany; ?>">
            
            <label>CONTACTO:</label>
            <input class="form-control" type="text" name="contactCompany" value="<?php echo $contactCompany; ?>">
            <input class="form-control" name="idCompany" value="<?php echo $idCompany; ?>" type="hidden">
            <div style="margin-top:20px;">
                <input style="background-color: #0b97c4;color:#ffffff;"  value="Actualizar" type="submit" class="btn btn-default">
            </div>
            
        </div>
      </div>
      
    </div>
  </div>
      </form>
</div>
 
<script>
$(document).ready(function(){
    // Show the Modal on load
   
    
    // Hide the Modal
    
    
     $("#myModal").modal({backdrop: "static"});
});
</script>

</body>
</html>

