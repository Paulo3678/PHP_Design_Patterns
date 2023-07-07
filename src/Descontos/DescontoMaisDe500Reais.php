<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\Desconto;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.05;
        }
        return $this->proximoDesconto->$orcamento;
    }
}
