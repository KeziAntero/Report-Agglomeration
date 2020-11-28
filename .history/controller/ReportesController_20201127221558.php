<?php
     
        require_once("../model/Reportes.php");
        require_once("./BDController.php");

        $reporte = new Reportes();

        $reporte->setNome_Local($_POST["nome"]);
        $reporte->setQuantPessoa($_POST["quantidade"]);

        if($_POST["opções"] === 0){
            $reporte->setMascara("Todas");
        }else if($_POST["opções"] === 1){
            $reporte->setMascara("Algumas");
        }else{
            $reporte->setMascara("Nenhuma");
        }
            
        $reporte->setDistanciamento($_POST["detachment"]);
        $reporte->setObs($_POST["note"]);
        $reporte->setDataHora(date("Y-m-d H:i:s",strtotime($_POST["hours"])));
        $reporte->setLatitude($_POST["lat"]);
        $reporte->setLongitude($_POST["lng"]);

        BDController::addReporte($reporte);
        
        header("Location: ../index.php");
        exit();
    
?>