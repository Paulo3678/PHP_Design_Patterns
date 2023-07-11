<?php

namespace Alura\DesignPattern;

use DateTime;

class GerarPedidoHandler
{
    public function __construct() {
        
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTime();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-mail para o clente " . PHP_EOL;
    }
}
