<?php

class PojoCategoria
{
    public  $idcategoria;
    public  $descricao;

    function setidcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }
    function getidcategoria()
    {
        return $this->idcategoria;
    }
    function setdescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    function getdescricao()
    {
        return $this->descricao;
    }
}
