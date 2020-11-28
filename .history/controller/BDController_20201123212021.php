<?php

namespace controller;

require_once('autoload.php');

use controller\ConexaoController;

class BDController 
{   

    static function addReporte($dado)
    {
        $nome = $dado->getNome_Local();
        $quant = $dado->getQuantPessoa();
        $mascara = $dado->getMascara();
        $dist = $dado->getDistanciamento();
        $obs = $dado->getObs();
        $dataHora = $dado->getDataHora();
        $localizacao = $dado->getCoordenada();

        $con = ConexaoController::conectar();
        $sql = "INSERT INTO Reportes(report_nomeLocal,report_quantPessoa,
            report_mascara,report_distanciamento,report_obs,
            report_dataHora,report_localizacao)
            VALUES(:nomeLocal,:quantPessoa,:mascara,:distanciamento,:obs,:dataHora,:localizacao)";
        $p = $con->prepare($sql);  
        
        $p->bindParam(":nomeLocal",$nome);
        $p->bindParam(":quantPessoa",$quant);
        $p->bindParam(":mascara",$mascara);
        $p->bindParam(":distanciamento",$dist);
        $p->bindParam(":obs",$obs);
        $p->bindParam(":dataHora",$dataHora);
        $p->bindParam(":localizacao",$localizacao);

        $p->execute();

    }
}