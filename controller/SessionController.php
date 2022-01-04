<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . '/newVerbs.php';
include_once dirname(__FILE__) . '/../class/DaoUser.php';
$objS = new DaoUser();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $objS->setEmail($_POST['login']);
    $pass = $_POST['pass'];
    $dados = $objS->Login();
    $resposta = 0;

    foreach ($dados as $row) {
        if (password_verify($pass, $row["senha"])) {
            $resposta = 1;
            session_start();
            $_SESSION['idusuario'] = $row["idusuario"];
            $_SESSION['nome'] = $row["nome"];
            $_SESSION['login'] = $row["email"];
        }
    }
    echo json_encode($resposta);

} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

    session_start();
    $resposta = 0;

    if ($_SESSION['idusuario'] != null) {
        $resposta = array(1, $_SESSION['idusuario'], $_SESSION['nome'], $_SESSION['login']);
    } else {
        $resposta = 0;
    }

    echo  json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
} else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
} else {
    echo json_encode('Dei erro');
}
