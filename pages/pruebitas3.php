<?php

session_start();
$word = $_SESSION["word"];
        echo $word;
        
        if ($word != 'aw.ds'){
            $pagaOrg = "Si";
        }else{
            $pagaOrg = "No";
        }
        echo 'organico'.$pagaOrg;
        
        if ($word == 'aw.ds'){
            $pagaAd = "Si";
        }else{
            $pagaAd = "No";
        }
        echo $pagaAd;
?>