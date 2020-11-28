<?php
        namespace controller;
        
        require_once("autoload.php");

        use controller\BDController;
        use model\Reportes;

        $reporte = new Reportes();

        $coordenada = $_POST["lat"].",".$_POST["lng"];
        $reporte->setCoordenada($coordenada);
        
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

        BDController::addReporte($reporte);
        
        header("Location: ../index.php");
        exit();
    
?>