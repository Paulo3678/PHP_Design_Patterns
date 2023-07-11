<?php

namespace Alura\DesignPattern;

use DateTime;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Command;
use Alura\DesignPattern\Orcamento;

class GerarPedido
{
    public function __construct(
        private float $valorOrcamento,
        private int $numeroDeItens,
        private string $nomeCliente
    ) {
    }
    
    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }
    
    public function getNumeroDeItens()
    {
        return $this->numeroDeItens;
    }
    
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}
