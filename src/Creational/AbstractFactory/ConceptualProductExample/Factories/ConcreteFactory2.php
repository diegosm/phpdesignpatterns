<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Factories;

use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductA\ProductA2;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductB\ProductB2;

class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}
