<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Breads;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\BreadInterface;

class Beet implements BreadInterface
{
    public function getName(): string
    {
        return "Beet Bread";
    }
}
