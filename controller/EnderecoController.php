<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . '/newVerbs.php';
include_once dirname(__FILE__) . '/../class/DaoEndereco.php';
$objF = new DaoEndereco();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $objF->setCep($_POST['NCEP']);
    $objF->setEndereco($_POST['NEndereco']);
    $objF->setNumero($_POST['NNumero']);
    $objF->setBairro($_POST['NBairro']);
    $objF->setCidade($_POST['NCidade']);
    $objF->setEstado($_POST['NUF']);
    $objF->setComplemento($_POST['NComplemento']);
    $objF->setSituacao($_POST['NSituação']);
    $objF->setIdpessoa($_POST['idPessoa']);
    $resposta = $objF->Insert();

    echo json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if ($_GET['tipoGet'] == "SelectTodos") {
        $objF->setIdpessoa($_GET['data']);
        $dados = $objF->SelectTodos();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = $resultado;
        }

        echo json_encode($resposta);
    } /*    
    else if ($_GET['tipoGet'] == "Select"){

        $objF->setIdpessoa($_GET['cod']);
        $dados = $objF->Select();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }
        echo json_encode($resposta);
    }*/
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {

    $objF->setCep($_PUT['ECEP']);
    $objF->setIdEndereco($_PUT['EIdEndereco']);
    $objF->setEndereco($_PUT['EEndereco']);
    $objF->setNumero($_PUT['ENumero']);
    $objF->setBairro($_PUT['EBairro']);
    $objF->setCidade($_PUT['ECidade']);
    $objF->setEstado($_PUT['EUF']);
    $objF->setComplemento($_PUT['EComplemento']);
    $objF->setSituacao($_PUT['ESituacao']);
    $objF->setIdpessoa($_PUT['idPessoa']);

    $resposta = $objF->Update();

    echo json_encode($resposta);

} else {
    echo json_encode('Dei erro');
}

?>
