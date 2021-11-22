<?php

include_once dirname(__FILE__) . '/Pojo/PojoFuncionario.php';
include_once dirname(__FILE__) . "/DAO.php";

class DaoFuncionario extends PojoFuncionario
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO pessoa (cnpj_cpf, nome, fone, email, obs, tipo)
                VALUES ('$this->cnpj_cpf', '$this->nome', '$this->fone', '$this->email', '$this->obs', $this->tipo)";

        if (mysqli_query($objB->Conectar(), $sql)) {
            $UltimoID = mysqli_insert_id($objB->Conectar());
            $sql2 = "INSERT INTO colaborador (idpessoa, idsetor)
                VALUES ($UltimoID, $this->idsetor)";

            if (mysqli_query($objB->Conectar(), $sql2)) {

                $resultado = "Cadastro Com Sucesso!";
            } else {
                $erros = strval(mysqli_error($objB->Conectar()));
                echo $erros;
                $resultado = "Erro ao Cadastrar. COD: $erros";
            }
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
        $sql = "UPDATE pessoa 
                SET cnpj_cpf ='$this->cnpj_cpf', nome ='$this->nome', fone ='$this->fone', email ='$this->email'
                WHERE idpessoa = $this->idpessoa";
        if (mysqli_query($objB->Conectar(), $sql)) {
            $sql2 = "UPDATE colaborador 
                SET idsetor ='$this->idsetor'
                WHERE idpessoa =$this->idpessoa";

            if (mysqli_query($objB->Conectar(), $sql2)) {
                $resultado = "Alterado Com Sucesso!";
            } else {
                $erros = strval(mysqli_errno($objB->Conectar()));
                $resultado = "Erro ao Alterar. COD: $erros";
            }
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Alterar. COD: $erros";
        }

        return $resultado;
    }

    function Delete()
    {
        $objB = new Dao();
        $sql = "DELETE FROM pessoa 
                    WHERE idpessoa = $this->idpessoa";
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
        $sql = "SELECT  p.idpessoa, p.cnpj_cpf, p.nome, p.fone, p.email, s.idsetor AS idsetor, s.nome AS Setor
        FROM pessoa p, setor s, colaborador c
        WHERE p.idpessoa = c.idpessoa AND s.idsetor = c.idsetor AND p.tipo = 2;";
        return mysqli_query($objB->Conectar(), $sql);
    }

    function Select()
    {
        $objB = new Dao();
        $sql = "SELECT p.idpessoa, p.cnpj_cpf, p.nome, p.fone, p.email, s.idsetor AS idsetor, s.nome AS Setor
        FROM pessoa p, setor s, colaborador c
        WHERE p.idpessoa = c.idpessoa AND s.idsetor = c.idsetor AND p.tipo = 2 AND p.idpessoa = $this->idpessoa";

        // return mysqli_query($objB->Conectar(), $sql);
        return mysqli_query($objB->Conectar(), $sql);
    }

    function SelectNovoUser()
    {
        $objB = new Dao();
        $sql = "SELECT c.idcolaborador, p.nome
        FROM pessoa p, setor s, colaborador c
        WHERE p.idpessoa = c.idpessoa AND s.idsetor = c.idsetor AND p.tipo = 2 AND p.cnpj_cpf = $this->cnpj_cpf;";

        // return mysqli_query($objB->Conectar(), $sql);
        return mysqli_query($objB->Conectar(), $sql);
    }
}
