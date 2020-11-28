<?php

class Reportes 
{
    private $nome_local, $dataHora, $mascara, $obs, $quantPessoa, $coordenada, $distanciamento;

    public function __construct
    ($nome,$quant,$dh,$dist,$masc,$obs,$local)
    {
        $this->nome_local = $nome;
        $this->quantPessoa = $quant;
        $this->dataHora = $dh;
        $this->distanciamento = $dist;
        $this->mascara = $masc;
        $this->obs = $obs;
        $this->coordenada = $local;
    }

    public function setNome_local($nome): void
    {
        $this->nome_local =  $nome;
    }

    public function getNome_local(): String
    {
        return $this->nome_local;
    }

    public function setQuantPessoa($quantidade): void
    {
        $this->quantPessoa = $quantidade;
    }

    public function getQuantPessoa(): int
    {
        return $this->quantPessoa;
    }

    public function setDataHora($dataHora): void
    {
        $this->dataHora = $dataHora;
    }

    public function getDataHora(): String
    {
        return $this->dataHora;
    }

    public function setDistanciamento($distanciamento): void
    {
        $this->distanciamento = $distanciamento;
    }

    public function getDistanciamento(): boolean
    {
        return $this->distanciamento;
    }

    public function setMascara($mascara): void
    {
        $this->mascara = $mascara;
    }

    public function getMascara(): String
    {
        return $this->mascara;
    }

    public function setObs($obs): void
    {
        $this->obs = $obs;
    }

    public function getObs(): String
    {
        return $this->obs;
    }

    public function setCoordenada($localizacao): void
    {
        $this->coordenada = $localizacao;
    }

    public function getCoordenada(): String
    {
        return $this->coordenada;
    }

}


?>
