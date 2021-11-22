<?php

include_once dirname(__FILE__) . '/Pojo/PojoCategoria.php';
include_once dirname(__FILE__) . "/DAO.php";




class DaoCategoria extends PojoCategoria
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO categoria (descricao)
                VALUES ('$this->descricao')";

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
        $sql = "UPDATE categoria 
                SET descricao ='$this->descricao'
                WHERE idcategoria =$this->idcategoria";

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
        $sql = "DELETE FROM categoria 
                    WHERE idcategoria = $this->idcategoria";
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
        $sql = "SELECT * FROM categoria ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function SelectUltimo()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM categoria ORDER BY idcategoria DESC LIMIT 1 ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function Select()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM categoria
                    where idcategoria = $this->idcategoria";

        return mysqli_query($objB->Conectar(), $sql);
    }
}
