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
        $con->prepare($ql);  
        
        $con->bindParam(":nomeLocal",$dado);
        $con->bindParam(":quantPessoa",$dado);
        $con->bindParam(":mascara",$dado);
        $con->bindParam(":distanciamento",$dado);
        $con->bindParam(":obs",$dado);
        $con->bindParam(":dataHora",$dado);
        $con->bindParam(":localizacao",$dado);

    }
}