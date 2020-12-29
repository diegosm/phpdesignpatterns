<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductB;

use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductB;

class ProductB1 implements AbstractProductB
{
    public function getName(): string
    {
        return "Product B1";
    }
}
