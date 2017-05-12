<?php

class Valores {

    function getMaterialAll() {
        include 'conexion.php';
        $query = "select * from material";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $claveCbb = $row['id_mat'];
            $descripcion = $row['desc_mat'];
            $marca = $row['marc_mat'];
            $empresa = $row['id_empr'];
            $precio = $row['prcio_mat'];
            $preciou = $row['priciou_mat'];
            $preciov = $row['priciov_mat'];
            $grcn = $row['grcn_mat'];
            $presentacion = $row['prese_mat'];
            $porigen = $row['id_pais'];
            $fechve = $row['fechve_mat'];
            $obse = $row['obse_mat'];
            $rsani = $row['rsani_mat'];
            $catft = $row['catft_mat'];

            echo '<tr><td><a href="descripcion.php?id_mat=' . $claveCbb . '">' . $claveCbb . '</a></td><td>' . $descripcion . '</td><td>' . $marca . '</td><td>' . $empresa . '</td><td>' . $presentacion . '</td><td>' . $precio . '</td></tr>';
            //<td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td>
        }
    }

    function saveEmployee($claveCbb, $descripcion, $marca, $empresa, $precio, $preciou, $preciov, $grcn, $presentacion, $porigen, $fechve, $obse, $rsani, $catft) {
        echo $claveCbb . '<br>' . $descripcion . '<br>' . $marca . '<br>' . $empresa . '<br>' . $precio . '<br>' . $preciou . '<br>' . $preciov . '<br>' . $grcn . '<br>' . $presentacion . '<br>' . $porigen . '<br>' . $fechve . '<br>' . $obse . '<br>' . $rsani . '<br>' . $catft;
        die();
        include 'conexion.php';
        $query = "INSERT INTO material VALUES ('$claveCbb','$descripcion','$marca',$empresa,$precio,$preciou,$preciov,'$grcn','$presentacion',$porigen,'$fechve','$obse','$rsani','$catft')";
        echo $query;
        if (!$result = mysqli_query($liga, $query)) {
//            echo '<script type="text/javascript">';
//            echo 'window.location.href="addEmp.php?succes=ok";';
//            echo '</script>';
              echo("Error description: " . mysqli_error($liga));
        }
    }
    
    function desc_mat ($id_mat){
        include 'conexion.php';
        $query = "select * from material where id_mat=".$id_mat;
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $claveCbb = $row['id_mat'];
            $descripcion = $row['desc_mat'];
            $marca = $row['marc_mat'];
            $empresa = $row['id_empr'];
            $precio = $row['prcio_mat'];
            $preciou = $row['priciou_mat'];
            $preciov = $row['priciov_mat'];
            $grcn = $row['grcn_mat'];
            $presentacion = $row['prese_mat'];
            $porigen = $row['id_pais'];
            $fechve = $row['fechve_mat'];
            $obse = $row['obse_mat'];
            $rsani = $row['rsani_mat'];
            $catft = $row['catft_mat'];
            
//            echo '<table><tr><td>' . $claveCbb . '</td><td>' . $descripcion . '</td><td>' . $marca . '</td><td>' . $empresa . '</td><td>' . $presentacion . '</td><td>' . $precio . '</td></tr></table>';
            //echo $claveCbb.'<br>'.$descripcion.'<br>'.$marca.'<br>'.$empresa.'<br>'.$precio.'<br>'.$preciou.'<br>'.$preciov.'<br>'.$grcn.'<br>'.$presentacion.'<br>'.$porigen.'<br>'.$fechve.'<br>'.$obse.'<br>'.$rsani.'<br>'.$catft;
            return array($claveCbb,$descripcion,$marca,$empresa,$precio,$preciou,$preciov,$grcn,$presentacion,$porigen,$fechve,$obse,$rsani,$catft);
        }
    }

    
    function saveCompany($nameComp, $telComp, $mailComp, $rfcComp, $dirComp, $cuentComp, $bancoComp, $contactComp){
        include 'conexion.php';
        $query = "INSERT INTO empresas (name_empre,tel_empre,mail_empre,rfc_empre,dir_empre,cuenta_empre,banco_empre,contact_empre) VALUES ('$nameComp','$telComp','$mailComp','$rfcComp','$dirComp','$cuentComp','$bancoComp','$contactComp')";
        
        if($result = mysqli_query($liga, $query)){
          echo '<script type="text/javascript">';
          echo 'window.location.href="addComp.php?succes=ok";';
          echo '</script>';
        }else{
          echo '<script type="text/javascript">';
          echo 'window.location.href="addComp.php?succes=false";';
          echo '</script>';  
        }
        
    }
    
    function getCompanyAll(){
        include 'conexion.php';
        $query = "select * from empresas";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $nameCompany = $row['name_empre'];
            $telCompany = $row['tel_empre'];
            $mailCompany = $row['mail_empre'];
            $rfcCompany = $row['rfc_empre'];
            $dirCompany = $row['dir_empre'];
            $cuentaCompany = $row['cuenta_empre'];
            $bancoCompany = $row['banco_empre'];
            $contactCompany = $row['contact_empre'];
            $idCompany = $row['id_empresas'];

            echo '<tr><td>' . $nameCompany . '</td><td>' . $telCompany . '</td><td>' . $mailCompany . '</td><td>' . $rfcCompany . '</td><td>' . $dirCompany . '</td><td>' . $cuentaCompany . '</td><td>'.$bancoCompany.'</td><td>'.$contactCompany.'</td><td><a href="editCompany.php?id_comp='.$idCompany.'">'.Editar.'</a></td></tr>';
            //<td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td>
        }
    }
    
    function getCompany($id_comp){
        include 'conexion.php';
        $query = 'select * from empresas where id_empresas='.$id_comp;
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $nameCompany = $row['name_empre'];
            $telCompany = $row['tel_empre'];
            $mailCompany = $row['mail_empre'];
            $rfcCompany = $row['rfc_empre'];
            $dirCompany = $row['dir_empre'];
            $cuentaCompany = $row['cuenta_empre'];
            $bancoCompany = $row['banco_empre'];
            $contactCompany = $row['contact_empre'];
            $idCompany = $row['id_empresas'];
            

            //echo $nameCompany.'<br>'.$telCompany.'<br>'.$mailCompany.'<br>'.$rfcCompany.'<br>'.$dirCompany.'<br>'.$cuentaCompany.'<br>'.$bancoCompany.'<br>'.$contactCompany;
            return array($nameCompany,$telCompany,$mailCompany,$rfcCompany,$dirCompany,$cuentaCompany,$bancoCompany,$contactCompany,$idCompany);
        }
    }
    
        function updateCompany($telCompany,$mailCompany,$rfcCompany,$dirCompany,$cuentaCompany,$bancoCompany,$contactCompany,$idCompany) {
        include 'conexion.php';
        $query = "UPDATE `empresas` SET `tel_empre`='$telCompany',`mail_empre`='$mailCompany',"
                . "`rfc_empre`='$rfcCompany',`dir_empre`='$dirCompany',`cuenta_empre`='$cuentaCompany',`banco_empre`='$bancoCompany',"
                . "`contact_empre`='$contactCompany' WHERE `id_empresas`=$idCompany";

       
        $result = mysqli_query($liga, $query) or die("<script>window.location.href='index.php?edit=no';</script>");
        
    }
    
    function getCompanySelect(){
        include 'conexion.php';
        $query = "select * from empresas";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $nameCompany = $row['name_empre'];
            $idCompany = $row['id_empresas'];

            echo '<option value="'.$idCompany.'">'.$nameCompany.'</option>';
            //<td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td>
        }
    }
    
    function updateMaterial($claveCbb,$descripcion,$marca,$empresa,$precio,$preciou,$preciov,$grcn,$presentacion,$porigen,$fechve,$obse) {
        include 'conexion.php';
        $query = "UPDATE `material` SET `marc_mat`='$marca',`id_empr`='$empresa',"
                . "`prcio_mat`='$precio',`prciou_mat`='$preciou',`prciov_mat`='$preciov',`grcn_mat`='$grcn',"
                . "`prese_mat`='$presentacion',`id_pais`='$porigen',`fechve_mat`='$fechve',`obse_mat`='$obse' WHERE `id_mat`=$claveCbb";

       
        $result = mysqli_query($liga, $query) or die();
        //"<script>window.location.href='index.php?edit=no';</script>"
    }

}
?>

