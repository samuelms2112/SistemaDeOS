<?php

include(dirname(__DIR__) . '/class/DaoUser.php');

$objF = new DaoUser();

$objF->setEmail("samuel@samuel.com");
$objF->setSenha("samuel21");
$objF->setIdcolaborador(1);

$r = $objF->Insert();

echo $r;