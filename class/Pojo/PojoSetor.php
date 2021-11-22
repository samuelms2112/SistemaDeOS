<?php

class PojoSetor
{
    public  $idsetor;
    public  $nome;

    function setidsetor($idsetor)
    {
        $this->idsetor = $idsetor;
    }
    function getidsetor()
    {
        return $this->idsetor;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function getNome()
    {
        return $this->nome;
    }
}
