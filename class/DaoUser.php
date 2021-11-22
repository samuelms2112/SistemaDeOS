<?php

include_once dirname(__FILE__) . '/Pojo/PojoUser.php';
include_once dirname(__FILE__) . "/DAO.php";




class DaoUser extends PojoUser
{

    function Insert()
    {
        $resultado = 0;
        $objB = new Dao();
        $sql = "INSERT INTO usuario (email, senha, idcolaborador)
                VALUES ('$this->email', '$this->senha', '$this->idcolaborador')";

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
        $sql = "UPDATE usuario 
                SET email ='$this->email'
                WHERE idusuario =$this->idusuario";

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
        $sql = "DELETE FROM usuario 
                    WHERE idusuario = $this->idusuario";
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
        $sql = "SELECT u.idusuario, p.nome, u.email 
        FROM usuario u, colaborador c, pessoa p
        WHERE u.idcolaborador = c.idcolaborador AND c.idpessoa = p.idpessoa;";
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
        $sql = "SELECT u.idusuario, p.nome, u.email 
        FROM usuario u, colaborador c, pessoa p
        WHERE u.idcolaborador = c.idcolaborador AND c.idpessoa = p.idpessoa AND idusuario = $this->idusuario";

        return mysqli_query($objB->Conectar(), $sql);
    }
}
