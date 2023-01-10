<?php
header('Content-Type: application/json; charset=utf-8');
require '../vendor/autoload.php';

use app\vo\ClienteVo;
use app\util\ValidationData;
use app\dao\CasaDao;
/*$cliente = new ClienteVo();
$cliente->setClienteNome('Lucas');
$cliente->setEmail('teste@teste.com');

$retorno = ValidationData::validateDataValues('Lucas');

print_r(json_encode($retorno));*/

$casa = new CasaDao();

$casa->register(array('tipo', 'nrcomodos'), array('residenciao', 2));

echo(json_encode($casa));