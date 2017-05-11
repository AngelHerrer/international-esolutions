<?php

class Valores {

//    function max_id($liga, $table, $column) {
//        $query = "select count(*) from " . $table;
//        $resultado = @mysqli_query($liga, $query) or die(mysql_error());
//        $row = mysqli_fetch_array($resultado);
//        if ($row['count(*)'] == 0) {
//            return 1;
//        }
//
//        $query = "select max(" . $column . ") from " . $table;
//        $resultado = @mysqli_query($liga, $query) or die(mysql_error());
//
//        $row = mysqli_fetch_array($resultado);
//        $id = $row['max(' . $column . ')'];
//
//        $id_auto = (int) $id + 1;
//
//        return $id_auto;
//    }
//
//    function saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp, $state, $delegaEmp, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $socialEmp, $socialNum, $referEmp, $servEmp, $dateIng, $cbEmp, $cbNum, $infonaEmp, $infonaNum) {
//        include 'conexion.php';
//        $id_auto = $this->max_id($liga, 'emp_prisma', 'id_emp');
//        $query = "INSERT INTO emp_prisma VALUES ('$id_auto','$nameEmp','$patEmp','$matEmp','$rfcEmp','$dateEmpNac','$placeEmp','$avenEmp','$colonyEmp','$postalEmp','$state','$delegaEmp','$phoneOne','$phoneTwo','$genderEmp','$civilEmp','$schoolEmp','$chilEmp','$socialEmp','$socialNum','$referEmp','1','$servEmp','$dateIng','1','$cbEmp','$cbNum','$infonaEmp','$infonaNum')";
//        echo $query;
//        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
//    }
//
//    function saveService($nameSer, $zonaSer, $tel_1Ser) {
//        include 'conexion.php';
//        $id_comp = 1;
//        if (empty($tel_1Ser)) {
//            $tel_1Ser = 'null';
//        }
//        $id_auto = $this->max_id($liga, 'servicios', 'id_ser');
//        $query = "insert into servicios  values ($id_auto,'$nameSer','$zonaSer',$id_comp,$tel_1Ser,null,1); ";
//        echo $query;
//        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
//        if ($result) {
//            echo '<script type="text/javascript">';
//            echo 'window.location.href="addService.php?succes=ok";';
//            echo '</script>';
//        }
//    }
//
//    function getAllService() {
//        include 'conexion.php';
//        $query = "SELECT * FROM `servicios`";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $id_ser = $row['id_ser'];
//            $nomb_ser = $row['nomb_ser'];
//            $zona_ser = $row['zona_ser'];
//            $tel1_ser = $row['tel1_ser'];
//            $bina_act = $row['bina_act'];
//            $x = 0;
//            if ($bina_act == 0) {
//                $x = 1;
//            }
//            if (empty($tel1_ser)) {
//                $inp = '<input type="tel" name="tel1_ser">';
//            } else {
//                $inp = $tel1_ser;
//            }
//            echo '<tr><td>' . $id_ser . '</td><td>' . $nomb_ser . '</td><td>' . $zona_ser . '</td><td>' . $inp . '<input type="text" value="' . $id_ser . '" name="id_ser"></td><td><select name="act_servicio"><option selected>' . $bina_act . '</option><option value="' . $x . '">' . $x . '</option></select></td><td><button type="submit" class="btn btn-primary">Guardar</button></td></tr>';
//        }
//    }
//
//    function getAllEmp() {
//        include 'conexion.php';
//        $query = "select id_emp,nomb_emp,apat_emp,amat_emp,nomb_ser from empleado_ser";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $idEmp = $row['id_emp'];
//            $nameEmp = $row['nomb_emp'];
//            $apPat = $row['apat_emp'];
//            $apMat = $row['amat_emp'];
//            $nomb_ser = $row['nomb_ser'];
//            echo '<tr><td>' . $idEmp . '</td><td>' . $nameEmp . '</td><td>' . $apPat . '</td><td>' . $apMat . '</td><td>' . $nomb_ser . '</td><td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td></tr>';
//        }
//    }
//
//    function getServices() {
//        include 'conexion.php';
//        $query = "SELECT * FROM `servicios`";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $id_ser = $row['id_ser'];
//            $nomb_ser = $row['nomb_ser'];
//            //$bina_act = $row['act_servicio'];
//            echo '<option value="' . $id_ser . '">' . $nomb_ser . '</option>';
//        }
//    }
//
//    function getEmp($idEmp) {
//        include 'conexion.php';
//        $query = "select * from `empleado_ser` where id_emp = '$idEmp'";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $idEmple = $row['id_emp'];
//            $nomEmple = $row['nomb_emp'];
//            $apPatEmple = $row['apat_emp'];
//            $apMatEmple = $row['amat_emp'];
//            $rfcEmple = $row['refc_emp'];
//            $dateNacEmple = $row['fhna_emp'];
//            $placeBirEmple = $row['id_stateN'];
//            $avEmple = $row['canu_emp'];
//            $colonyEmple = $row['colo_emp'];
//            $cpEmple = $row['copo_emp'];
//            $delEmple = $row['id_state'];
//            $stateEmple = $row['id_municipio'];
//            $phoneEmple = $row['tel1_emp'];
//            $phoneTwoEmple = $row['tel2_emp'];
//            $genderEmple = $row['gene_emp'];
//            $civilEmple = $row['eciv_emp'];
//            $schoEmple = $row['esco_emp'];
//            $chilEmple = $row['nuhi_emp'];
//            $referEmple = $row['dref_emp'];
//            $id_ser = $row['id_ser'];
//            //$socialEmple = $row[''];
//            $socSecuEmple = $row['sectso_emp'];
//            $infonaEmple = $row['ninfonavi_emp'];
//            $serviceEmple = $row['nomb_ser'];
//            $dateAdmEmple = $row['fhin_emp'];
//            $lockedEmple = $row ['bina_blo'];
//            //$lockedEmple = $row['emp_locked'];
//            $bankEmple = $row['ncuen_emp'];
//
//            return array($idEmple, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple,
//                $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple,
//                $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple,
//                $id_ser, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple, $infonaEmple);
//        }
//    }
//
//    function allState() {
//        include 'conexion.php';
//        $query = "SELECT * FROM `estados`";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $id_state = $row['id_state'];
//            $state = $row['estado'];
//            echo '<option value="' . $id_state . '">' . $state . '</option>';
//        }
//    }
//
//    function updateEmple($idEmp, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple, $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple, $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple, $turnEmple, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple, $infonaEmple) {
//        include 'conexion.php';
//        $query = "UPDATE `emp_prisma` SET `nomb_emp`='$nomEmple',`apat_emp`='$apPatEmple',"
//                . "`amat_emp`='$apMatEmple',`refc_emp`='$rfcEmple',`fhna_emp`='$dateNacEmple',`id_stateN`='$placeBirEmple',"
//                . "`canu_emp`='$avEmple',`colo_emp`='$colonyEmple',`copo_emp`='$cpEmple',"
//                . "`id_municipio`='$delEmple',`id_state`='$stateEmple',`tel1_emp`='$phoneEmple',`tel2_emp`='$phoneTwoEmple',"
//                . "`gene_emp`='$genderEmple',`eciv_emp`='$civilEmple',`esco_emp`='$schoEmple',"
//                . "`nuhi_emp`='$chilEmple',`dref_emp`='$referEmple',"
//                . "`sectso_emp`='$socSecuEmple',`id_ser`='$serviceEmple',"
//                . "`fhin_emp`='$dateAdmEmple',`bina_blo`='$lockedEmple',`ncuen_emp`='$bankEmple', `ninfonavi_emp`='$infonaEmple' WHERE `id_emp`=$idEmp";
//
//        
//        $result = mysqli_query($liga, $query) or die("<script>window.location.href='index.php?edit=no';</script>");
//    }
//
//    function getMuni($idState) {
//        include 'conexion.php';
//        $opciones = '<option value="0"> Elige un municipio</option>';
//        $query = 'select * from prisma.municipios where id_estado =' . $idState;
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $id_state = $row['id_municipio'];
//            $state = $row['nombre_municipio'];
//            echo $opciones = '<option value="' . $id_state . '">' . $state . '</option>';
//        }
//    }
//
//    function getEmpServ($idService, $weekService, $mothService, $yearService, $i) {
//        include 'conexion.php';
//        $days = cal_days_in_month(CAL_GREGORIAN, $mothService, $yearService);
//        $query = "SELECT * FROM prisma.emp_prisma where id_ser = $idService";
//        $result = mysqli_query($liga, $query);
//        
//        $selects = '';
//        if ($weekService == '1') {
//            for ($i = 1; $i < 16; $i++) {
//                $selects .= '<td><select name="turnos"><option>---</option>'.$this->getTurnos().'</select></td>';
//                
//            }
//        } elseif ($weekService == '2') {
//            for ($i = 16; $i < 31; $i++) {
//                $selects .= '<td><select name="turno"><option>---</option>'.$this->getTurnos().'</select></td>';
//                
//            }
//        }
//        
//        while ($row = mysqli_fetch_array($result)) {
//            
//            $id_emp = $row['id_emp'];
//            $nomb_emp = $row['nomb_emp'];
//            $apat_emp = $row['apat_emp'];
//            $amat_emp = $row['amat_emp'];
//            echo '<tr><td>' . $id_emp . '</td><td>' . $nomb_emp . ' ' . $apat_emp . ' ' . $amat_emp . '</td>'.$selects.'</tr>';
//        }
//    }
//
//    function updateServ($idSer, $tel1_ser, $act_servicio) {
//        include 'conexion.php';
//        if (empty($tel1_ser)) {
//            $query = "UPDATE `servicios` SET `bina_act`=$act_servicio WHERE `id_ser`=$idSer";
//        } elseif (empty($act_servicio)) {
//            $query = "UPDATE `servicios` SET `tel1_ser`=$tel1_ser WHERE `id_ser`=$idSer";
//        } else {
//            $query = "UPDATE `servicios` SET `tel1_ser`=$tel1_ser,`bina_act`=$act_servicio WHERE `id_ser`=$idSer";
//        }
//        echo $query;
//        die();
//        $result = mysqli_query($liga, $query) or die("<script>window.location.href='addService.php?edit=no';</script>");
//        if ($result) {
//            echo '<script type="text/javascript">';
//            echo 'window.location.href="addService.php?update=ok";';
//            echo '</script>';
//        }
//    }
//    function getTurnos(){
//        include 'conexion.php';
//        $query = "SELECT * FROM turnos";
//        $result = mysqli_query($liga, $query);
//        while ($row = mysqli_fetch_array($result)) {
//            $id_turn = $row['id_turn'];
//            $alias_turn = $row['alias_turn'];
//                $select.='<option value="' . $id_turn . '">' . $alias_turn . '</option>';
//        }
//        return $select;
//    }

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
        include 'conexion.php';
        $query = "INSERT INTO material VALUES ('$claveCbb','$descripcion','$marca',$empresa,$precio,$preciou,$preciov,'$grcn','$presentacion',$porigen,'$fechve','$obse','$rsani','$catft')";
        echo $query;
        if ($result = mysqli_query($liga, $query)) {
//            echo '<script type="text/javascript">';
//            echo 'window.location.href="addEmp.php?succes=ok";';
//            echo '</script>';
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

