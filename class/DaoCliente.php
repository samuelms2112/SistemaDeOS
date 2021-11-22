<?php

include_once dirname(__FILE__) . '/Pojo/PojoCliente.php';
include_once dirname(__FILE__) . "/DAO.php";

class DaoCliente extends PojoCliente
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO pessoa (cnpj_cpf, nome, fone, email, obs, tipo)
                VALUES ('$this->cnpj_cpf', '$this->nome', '$this->fone', '$this->email', '$this->obs', $this->tipo)";

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
        $sql = "UPDATE pessoa 
                SET cnpj_cpf ='$this->cnpj_cpf', nome ='$this->nome', fone ='$this->fone', email ='$this->email'
                WHERE idpessoa = $this->idpessoa";
        if (mysqli_query($objB->Conectar(), $sql)) {
                $resultado = "Alterado Com Sucesso!";
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Alterar. COD: $erros";
        }

        return $resultado;
    }

    function UpdateOBS()
    {
        $objB = new Dao();
        $sql = "UPDATE pessoa 
                SET obs ='$this->obs'
                WHERE idpessoa = $this->idpessoa";
        if (mysqli_query($objB->Conectar(), $sql)) {
                $resultado = "OBS Alterado Com Sucesso!";
        } else {
            $erros = strval(mysqli_errno($objB->Conectar()));
            $resultado = "Erro ao Alterar. COD: $erros";
        }

        return $resultado;
    }

    function SelectTodos()
    {
        $objB = new Dao();
        $sql = "SELECT * FROM pessoa WHERE tipo = 1";
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
