<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . '/newVerbs.php';
include_once dirname(__FILE__) . '/../class/DaoCategoria.php';
$objS = new DaoCategoria();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $objS->setdescricao($_POST['descricao']);
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

        $objS->setidcategoria($_GET['cod']);
        $dados = $objS->Select();

        while ($resultado = mysqli_fetch_assoc($dados)) {
            $resposta[] = array_map('utf8_encode', $resultado);
        }
        echo json_encode($resposta);
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {

    $objS->setidcategoria($_PUT['cod']);
    $objS->setdescricao($_PUT['descricao']);

    $resposta = $objS->Update();

    echo json_encode($resposta);
} else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
    $objS->setidcategoria($_DELETE['cod']);
    $resposta = $objS->Delete();

    echo json_encode($resposta);
} else {
    echo json_encode('Dei erro');
}

?>
