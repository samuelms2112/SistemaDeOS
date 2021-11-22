<?php

class PojoEndereco
{
    public $idEndereco;
    public  $endereco;
    public  $cep;
    public  $numero;
    public  $cidade;
    public  $bairro;
    public  $estado;
    public  $obs;
    public  $situacao;
    public  $idpessoa;
    public  $complemento;

    function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;
    }
    function getIdEndereco()
    {
        return $this->idEndereco;
    }
    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    function getEndereco()
    {
        return $this->endereco;
    }
    function setCep($cep)
    {
        $this->cep = $cep;
    }
    function getCep()
    {
        return $this->cep;
    }
    function setNumero($numero)
    {
        $this->numero = $numero;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }
    function getEstado()
    {
        return $this->estado;
    }
    function setObs($obs)
    {
        $this->obs = $obs;
    }
    function getObs()
    {
        return $this->obs;
    }
    function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
    function getSituacao()
    {
        return $this->situacao;
    }
    function setIdpessoa($idpessoa)
    {
        $this->idpessoa = $idpessoa;
    }
    function getIdpessoa()
    {
        return $this->idpessoa;
    }

    function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    function getComplemento()
    {
        return $this->complemento;
    }
}
