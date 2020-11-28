<?php

require_once('../autoload.php');

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
        $latitude = $dado->getLatitude();
        $longitude = $dado->getLongitude();

        $con = ConexaoController::conectar();
        $sql = "INSERT INTO Reportes(report_nome_local,report_quantidade_pessoas,
            report_mascara,report_distanciamento,report_observacoes,
            report_data_hora,report_latitude,report_longitude)
            VALUES(:nomeLocal,:quantPessoa,:mascara,:distanciamento,:obs,:dataHora,:latitude,:longitude)";
        $p = $con->prepare($sql);  
        
        $p->bindParam(":nomeLocal",$nome);
        $p->bindParam(":quantPessoa",$quant);
        $p->bindParam(":mascara",$mascara);
        $p->bindParam(":distanciamento",$dist);
        $p->bindParam(":obs",$obs);
        $p->bindParam(":dataHora",$dataHora);
        $p->bindParam(":latitude",$latitude);
        $p->bindParam(":longitude",$longitude);

        $p->execute();

    }
}