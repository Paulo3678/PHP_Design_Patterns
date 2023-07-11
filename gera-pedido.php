<?php
require_once __DIR__ . "/vendor/autoload.php";

use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
(new GerarPedidoHandler())->execute($gerarPedido);
