<?php

require_once('ConexaoController.php');

class BDController 
{   

    static function addReporte($dado)
    {
        $con = ConexaoController::conectar();
        $sql = "INSERT INTO Reportes(report_nomeLocal,report_quantPessoa,
            report_mascara,report_distanciamento,report_obs,
            report_dataHora,report_localizacao)
            VALUES(:nomeLocal,:quantPessoa,:mascara,:distanciamento,:obs,:dataHora,:localizacao)";
        $con->prepare($sql);  
        
        $con->bindParam(":nomeLocal",$dado->getNome_Local());
        $con->bindParam(":quantPessoa",$dado->getQuantPessoa());
        $con->bindParam(":mascara",$dado->getMascara());
        $con->bindParam(":distanciamento",$dado->getDistanciamento());
        $con->bindParam(":obs",$dado->getObs());
        $con->bindParam(":dataHora",$dado->getDataHora());
        $con->bindParam(":localizacao",$dado->getCoordenada());

        echo ":nomeLocal, :quantPessoa, :mascara, :distanciamento, :obs, :dataHora, :localizacao";

    }
}