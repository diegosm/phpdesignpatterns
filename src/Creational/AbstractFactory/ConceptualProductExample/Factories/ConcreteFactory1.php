<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Factories;

use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductA\ProductA1;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductB\ProductB1;

class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB1();
    }
}
