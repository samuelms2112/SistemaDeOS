<?php

class PojoCliente
{
    public $idpessoa;
    public  $cnpj_cpf;
    public  $nome;
    public  $fone;
    public  $email;
    public  $obs;
    public  $tipo = 1;

    function setIdpessoa( $idpessoa)
    {
        $this->idpessoa = $idpessoa;
    }

    function getIdpessoa()
    {
        return $this->idpessoa;
    }

    function setIdcolaborador( $idcolaborador)
    {
        $this->idcolaborador = $idcolaborador;
    }

    function getIdcolaborador()
    {
        return $this->idcolaborador;
    }

    function setCnpj_cpf( $cnpj_cpf)
    {
        $this->cnpj_cpf = $cnpj_cpf;
    }

    function getCnpj_cpf()
    {
        return $this->cnpj_cpf;
    }

    function setNome( $nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setFone( $fone)
    {
        $this->fone = $fone;
    }

    function getFone()
    {
        return $this->fone;
    }

    function setEmail( $email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setObs( $obs)
    {
        $this->obs = $obs;
    }

    function getObs()
    {
        return $this->obs;
    }

    function setTipo( $tipo = 2)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function setidsetor( $idsetor)
    {
        $this->idsetor = $idsetor;
    }
    
    function getidsetor()
    {
        return $this->idsetor;
    }
}
