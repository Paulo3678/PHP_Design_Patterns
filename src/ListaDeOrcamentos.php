<?php

namespace Alura\DesignPattern;

use Traversable;
use ArrayIterator;
use IteratorAggregate;
use Alura\DesignPattern\Orcamento;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos()
    {
        return $this->orcamentos();
    }

    public function getIterator(): Traversable
    {
        // Cria um iterador, algo que pode ser percorrido, por meio de um array
        return new ArrayIterator($this->orcamentos);
    }
}
