<?php

include_once dirname(__FILE__) . '/Pojo/PojoProduto.php';
include_once dirname(__FILE__) . "/DAO.php";




class DaoProduto extends PojoProduto
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO produto (descricao, valorunitario, codBarras, idcategoria)
                VALUES ('$this->descricao', $this->valorunitario, '$this->codBarras', $this->idcategoria)";

        if (mysqli_query($objB->Conectar(), $sql)) {
            $resultado = "Cadastro Com Sucesso!";
        } else {
            $erros = strval(mysqli_error($objB->Conectar()));
            echo $erros;
            $resultado = "Erro ao Cadastrar. COD: $erros";
        }

        return $resultado;
    }

    function Update()
    {
        $objB = new Dao();
        $sql = "UPDATE produto 
                SET descricao ='$this->descricao', valorunitario =$this->valorunitario, codBarras ='$this->codBarras', idcategoria =$this->idcategoria
                WHERE idproduto =$this->idproduto";

        if (mysqli_query($objB->Conectar(), $sql)) {
            $resultado = "Alterado Com Sucesso!";
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Alterar. COD: $erros";
        }

        return $resultado;
    }

    function Delete()
    {
        $objB = new Dao();
        $sql = "DELETE FROM produto 
                    WHERE idproduto = $this->idproduto";
        if (mysqli_query($objB->Conectar(), $sql)) {
            $resultado = "Deletado Com Sucesso!";
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Deletar. COD: $erros";
        }

        return $resultado;
    }

    function SelectTodos()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM produto ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function SelectUltimo()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM produto ORDER BY idproduto DESC LIMIT 1 ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function Select()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM produto
                    where idproduto = $this->idproduto";

        return mysqli_query($objB->Conectar(), $sql);
    }
}
