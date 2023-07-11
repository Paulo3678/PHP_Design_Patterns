<?php

namespace Alura\DesignPattern;

use DateTime;
use Alura\DesignPattern\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public DateTime $dataFinalizacao;
    public Orcamento $orcamento;
}
