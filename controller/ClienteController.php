<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . '/newVerbs.php';
include_once dirname(__FILE__) . '/../class/DaoCliente.php';
$objF = new DaoCliente();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $objF->setCnpj_cpf($_POST['cpf']);
    $objF->setNome($_POST['nome']);
    $objF->setFone($_POST['telfone']);
    $objF->setEmail($_POST['email']);
    $objF->setObs($_POST['obs']);
    $resposta = $objF->Insert();

    echo json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if ($_GET['tipoGet'] == "SelectTodos") {
        $dados = $objF->SelectTodos();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }

        echo json_encode($resposta);
    } else if ($_GET['tipoGet'] == "Select") {

        $objF->setIdpessoa($_GET['cod']);
        $dados = $objF->Select();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }
        echo json_encode($resposta);
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {

    if ($_PUT['tipoPut'] == "editarOBS") {
        $objF->setIdpessoa($_PUT['idPessoa']);
        $objF->setObs($_PUT['DObs']);

        $resposta = $objF->UpdateOBS();

        echo json_encode($resposta);
    } else {

        $objF->setIdpessoa($_PUT['IdPessoa']);
        $objF->setCnpj_cpf($_PUT['CPF']);
        $objF->setNome($_PUT['Nome']);
        $objF->setFone($_PUT['Telfone']);
        $objF->setEmail($_PUT['Email']);

        $resposta = $objF->Update();

        echo json_encode($resposta);
    }
} else {
    echo json_encode('Dei erro');
}
