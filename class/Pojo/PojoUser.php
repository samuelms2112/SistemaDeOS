<?php

class PojoUser
{
    public  $idusuario;
    public  $email;
    public  $senha;
    public  $idcolaborador;
    public  $adm;
    public  $senhaNova;

    function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    function getIdusuario()
    {
        return $this->idusuario;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setSenha($senha)
    {
        $this->senha = $senha;
    }
    function getSenha()
    {
        return $this->senha;
    }
    function setIdcolaborador($idcolaborador)
    {
        $this->idcolaborador = $idcolaborador;
    }
    function getIdcolaborador()
    {
        return $this->idcolaborador;
    }
    function setAdm($adm)
    {
        $this->adm = $adm;
    }
    function getAdm()
    {
        return $this->adm;
    }
    function setSenhaNova($senhaNova)
    {
        $this->senhaNova = $senhaNova;
    }
    function getSenhaNova()
    {
        return $this->senhaNova;
    }
}
