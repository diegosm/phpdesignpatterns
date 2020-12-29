<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\ProductA;

use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductA;

class ProductA2 implements AbstractProductA
{
    public function getName(): string
    {
        return "Product A2";
    }
}
