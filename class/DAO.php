<?php
error_reporting(E_ALL);
class Dao {

    // private $host = "54.227.82.149";
    // private $base = "os001";
    // private $user = "samuel";
    // private $pass = "scan@12";
    // private $bancoC;

    private $host = "localhost";
    private $base = "os001";
    private $user = "root";
    private $pass = "";
    private $port = 3306;
    private $bancoC;

    function UTF8($banco){
        // Correção UTF-8
        mysqli_query($banco,"SET NAMES 'utf8'");
        mysqli_query($banco,'SET character_set_connection=utf8');
        mysqli_query($banco,'SET character_set_client=utf8');
        mysqli_query($banco,'SET character_set_results=utf8');
    }

    function __construct(){
        $banco = mysqli_connect($this->host, $this->user, $this->pass, $this->base, $this->port);
        if(mysqli_connect_errno($banco)){
            echo mysqli_connect_error();
        }
        $this->UTF8($banco);

        $this->bancoC = $banco;
    }

    function Conectar(){
        return $this->bancoC;
    }


}

?>