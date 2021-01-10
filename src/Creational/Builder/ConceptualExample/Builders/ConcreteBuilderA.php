<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\ConceptualExample\Builders;

use DesignPatterns\Creational\Builder\ConceptualExample\Contracts\Builder;
use DesignPatterns\Creational\Builder\ConceptualExample\Products\Product;

class ConcreteBuilderA implements Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA() : void
    {
        $this->product->addPart('Part A.A.');
    }

    public function buildPartB() : void
    {
        $this->product->addPart('Part A.B.');
    }

    public function buildPartC() : void
    {
        $this->product->addPart('Part A.C.');
    }

    public function getProduct() : Product
    {
        return $this->product;
    }
}
