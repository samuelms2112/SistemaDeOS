<?php

class PojoProduto
{
    public  $idproduto;
    public  $descricao;
    public  $valorunitario;
    public  $codBarras;
    public  $idcategoria;

    function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
    }
    function getIdproduto()
    {
        return $this->idproduto;
    }
    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function setValorunitario($valorunitario)
    {
        $this->valorunitario = $valorunitario;
    }
    function getValorunitario()
    {
        return $this->valorunitario;
    }
    function setCodBarras($codBarras)
    {
        $this->codBarras = $codBarras;
    }
    function getCodBarras()
    {
        return $this->codBarras;
    }
    function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }
    function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
