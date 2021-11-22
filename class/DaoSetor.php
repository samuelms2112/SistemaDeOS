<?php

include_once dirname(__FILE__) . '/Pojo/PojoSetor.php';
include_once dirname(__FILE__) . "/DAO.php";




class DaoSetor extends PojoSetor
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO setor (nome)
                VALUES ('$this->nome')";

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
        $sql = "UPDATE setor 
                SET nome ='$this->nome'
                WHERE idsetor =$this->idsetor";

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
        $sql = "DELETE FROM setor 
                    WHERE idsetor = $this->idsetor";
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
        $sql = "SELECT * FROM setor ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function SelectUltimo()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM setor ORDER BY idsetor DESC LIMIT 1 ";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function Select()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM setor
                    where idsetor = $this->idsetor";

        return mysqli_query($objB->Conectar(), $sql);
    }
}
