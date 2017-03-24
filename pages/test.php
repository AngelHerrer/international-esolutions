<?php
//    date_default_timezone_set("America/Los Angeles"); //Defines la zona horaria

//function UltimoDia($anho,$mes){
$anho=2017;
$mes=02;

   if (((fmod($anho,4)==0) and (fmod($anho,100)!=0)) or (fmod($anho,400)==0)) {
       $dias_febrero = 29;
       
   } else {
       $dias_febrero = 28;
       
   }
//   echo $dias_febrero;

   $numero = cal_days_in_month(CAL_GREGORIAN, $mes, $anho); // 31
    echo "Hubo {$numero} días en ".$mes." del".$anho ."<br>";

 for($i=1; $i < 16; $i++ ){
     echo $i;
     
 }
 echo '<br>';
 
  for($i=16-4; $i < $numero+1; $i++ ){
     echo $i; 
 }

//if (30 > 29) {
//    echo '2';
//    return 2; // Dos quincenas
//} else {
//    echo '1';
//    return 1; // Una sola quincena
//}
