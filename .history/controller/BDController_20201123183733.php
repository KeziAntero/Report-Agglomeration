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
        $p = $con->prepare($sql);  
        
        $p->bindParam(":nomeLocal",$dado->getNome_Local());
        $p->bindParam(":quantPessoa",$dado->getQuantPessoa());
        $p->bindParam(":mascara",$dado->getMascara());
        $p->bindParam(":distanciamento",$dado->getDistanciamento(),PDO::PARAM_BOOL);
        $p->bindParam(":obs",$dado->getObs());
        $p->bindParam(":dataHora",$dado->getDataHora());
        $p->bindParam(":localizacao",$dado->getCoordenada());

        echo ":nomeLocal, :quantPessoa, :mascara, :distanciamento, :obs, :dataHora, :localizacao";

    }
}