<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . '/newVerbs.php';
include_once dirname(__FILE__) . '/../class/DaoSetor.php';
$objS = new DaoSetor();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $objS->setNome($_POST['nome']);
    $resposta = $objS->Insert();

    echo json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if ($_GET['tipoGet'] == "SelectTodos") {
        $dados = $objS->SelectTodos();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }

        echo json_encode($resposta);
    } 
    
    else if ($_GET['tipoGet'] == "SelectUltimo"){
        $dados = $objS->SelectUltimo();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }
        echo json_encode($resposta);
    } 
    
    else if ($_GET['tipoGet'] == "Select"){

        $objS->setidsetor($_GET['cod']);
        $dados = $objS->Select();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }
        echo json_encode($resposta);
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {

    $objS->setidsetor($_PUT['cod']);
    $objS->setNome($_PUT['nome']);

    $resposta = $objS->Update();

    echo json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    $objS->setidsetor($_DELETE['cod']);
    $resposta = $objS->Delete();

    echo json_encode($resposta);
} else {
    echo json_encode('Dei erro');
}

?>
