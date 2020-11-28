<?php
        require_once("../model/Reportes.php");

        $reporte = new Reportes();

        $coordenada = $_POST["lat"].",".$_POST["lng"];
        $reporte->setCoordenada($coordenada);
        
        $reporte->setNome_Local($_POST["nome"]);
        $reporte->setQuantPessoa($_POST["number"]);

        if($_POST["opções"] === 0){
            $reporte->setMascara("Todas");
        }else if($_POST["opções"] === 1){
            $reporte->setMascara("Algumas");
        }else{
            $reporte->setMascara("Nenhuma");
        }
            
        if($_POST["detachment"] === 1){
            $reporte->setDistanciamento(TRUE);
        }else{
            $reporte->setDistanciamento(FALSE);
        }
            
        $reporte->setObs($_POST["note"]);
        $reporte->setDataHora(date("Y-m-d H:i:s",strtotime($_POST["hours"])));

        BDController::addReporte($reporte);
        
    

?>