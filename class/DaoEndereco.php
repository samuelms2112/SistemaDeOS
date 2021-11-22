<?php

include_once dirname(__FILE__) . '/Pojo/PojoEndereco.php';
include_once dirname(__FILE__) . "/DAO.php";

class DaoEndereco extends PojoEndereco
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO endereco (endereco, cep, numero, cidade, bairro, estado, complemento, situacao, idpessoa)
                VALUES ('$this->endereco', '$this->cep', '$this->numero', '$this->cidade', '$this->bairro', '$this->estado', '$this->complemento', '$this->situacao', $this->idpessoa)";
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
        $sql = "UPDATE endereco 
                SET endereco ='$this->endereco', cep ='$this->cep', numero ='$this->numero', cidade ='$this->cidade', bairro ='$this->bairro', estado ='$this->estado', complemento ='$this->complemento', situacao ='$this->situacao'
                WHERE idpessoa = $this->idpessoa and idEndereco = $this->idEndereco";
        if (mysqli_query($objB->Conectar(), $sql)) {
                $resultado = "Alterado Com Sucesso!";
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Alterar. COD: $erros";
        }

        return $resultado;
    }

    function SelectTodos()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM endereco 
        WHERE idpessoa = $this->idpessoa";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function Select()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM pessoa WHERE tipo = 1 AND idpessoa = $this->idpessoa";

        // return mysqli_query($objB->Conectar(), $sql);
        return mysqli_query($objB->Conectar(), $sql);
    }
}
